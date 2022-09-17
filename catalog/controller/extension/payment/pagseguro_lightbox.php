<?php
class ControllerExtensionPaymentPagseguroLightbox extends Controller
{
	public function index()
	{
		$this->load->language('extension/payment/pagseguro_lightbox');

		$data['text_sandbox'] = $this->language->get('text_sandbox');
		$data['button_confirm'] = $this->language->get('button_confirm');

		if ($this->config->get('payment_pagseguro_lightbox_sandbox')) {
			$data['action'] = 'https://ws.sandbox.pagseguro.uol.com.br/v2/checkout';
		} else {
			$data['action'] = 'https://ws.pagseguro.uol.com.br/v2/checkout';
		}

		$data['mode_sandbox'] = $this->config->get('payment_pagseguro_lightbox_sandbox');

		$this->load->model('checkout/order');

		$order_info = $this->model_checkout_order->getOrder($this->session->data['order_id']);

		if ($order_info) {
			$data['order_id'] = $this->session->data['order_id'];
			return $this->load->view('extension/payment/pagseguro_lightbox', $data);
		}
	}

	public function send()
	{
		/* ID do Pedido */
		$order_id = $this->session->data['order_id'];

		$this->load->model('checkout/order');
		$this->load->model('extension/payment/pagseguro');

		$order_info = $this->model_checkout_order->getOrder($order_id);

		if ($order_info) {
			// $data["email"] = "donoleozinnn@live.com";
			// $data["token"] = "1D2CD3CE835F44BDBB04F4B620C3675E";
			$data["email"] = $this->config->get('payment_pagseguro_lightbox_email');
			$data["token"] = $this->config->get('payment_pagseguro_lightbox_token');
			$data["currency"] = $order_info['currency_code'];
			$data["reference"] = 'Pedido #' . $order_id;
			$data["senderName"] = utf8_decode(trim($order_info['firstname']) . ' ' . trim($order_info['lastname']));
			$data['documentstype'] = 'senderCPF';
			$data['senderCPF'] = preg_replace('/[^0-9]/', '', $order_info['custom_field'][1]);
			$data['senderAreaCode'] = substr(preg_replace('/[^0-9]/', '', $order_info['telephone']), 0, 2);
			$data['senderPhone'] = substr(preg_replace('/[^0-9]/', '', $order_info['telephone']), 2);
			$data["senderEmail"] = $order_info['email'];
			// $data["senderEmail"] = "c56433058952656234633@sandbox.pagseguro.com.br";

			/* Produtos */
			$count = 1;

			foreach ($this->cart->getProducts() as $product) {
				if ($product['price'] > 0) {
					$data['itemId' . $count] = $product['product_id'];
					$data['itemDescription' . $count] = $product['name'] . ' | ' . $product['model'];
					$data['itemAmount' . $count] = number_format($this->currency->format($product['price'], $order_info['currency_code'], $order_info['currency_value'], false), 2, '.', '');
					$data['itemQuantity' . $count] = $product['quantity'];

					$count++;
				}
			}


			/* Tipo e Valor do Frete */
			$shipping_free = $this->model_extension_payment_pagseguro->checkShippingFree();
			if ($this->cart->hasShipping() && !$shipping_free) {
				$data['shippingType'] = $this->model_extension_payment_pagseguro->getShippingType();
				$data['shippingCost'] = number_format($this->session->data['shipping_method']['cost'], 2, '.', '');
				// $data["extraAmount"] -= $this->session->data['shipping_method']['cost'];
				$shipping_cost = $this->session->data['shipping_method']['cost']; // 41.55
			} else {
				$data['shippingType'] = '3';
				$data['shippingCost'] = '0.00';
				$shipping_cost = '0.00';
			}

			$sub_total = $this->cart->getSubTotal(); // 100

			$total_order = $order_info['total'];

			$total = $sub_total + $shipping_cost;

			$discount = $total - $total_order;

			if ($discount > 0) {
				$data['extraAmount'] = '-' . number_format($discount, 2, '.', '');
			}

			if (isset($this->session->data['shipping_address'])) {
				// use Shipping
				$data["shippingAddressStreet"] = $order_info['shipping_address_1'];
				$data["shippingAddressNumber"] = $order_info['shipping_custom_field'][2];
				$data["shippingAddressComplement"] = $order_info['shipping_company'];
				$data["shippingAddressDistrict"] = $order_info['shipping_address_2'];
				$data["shippingAddressPostalCode"] = $order_info['shipping_postcode'];
				$data["shippingAddressCity"] = $order_info['shipping_city'];
				$data["shippingAddressState"] = $order_info['shipping_zone_code'];
				$data["shippingAddressCountry"] = $order_info['shipping_iso_code_3'];
			} else {
				// use Payment
				$data["shippingAddressStreet"] = $order_info['payment_address_1'];
				$data["shippingAddressNumber"] = $order_info['payment_custom_field'][2];
				$data["shippingAddressComplement"] = $order_info['payment_company'];
				$data["shippingAddressDistrict"] = $order_info['payment_address_2'];
				$data["shippingAddressPostalCode"] = $order_info['payment_postcode'];
				$data["shippingAddressCity"] = $order_info['payment_city'];
				$data["shippingAddressState"] = $order_info['payment_zone_code'];
				$data["shippingAddressCountry"] = $order_info['payment_iso_code_3'];
			}

			// Status 1 = Aguardando Pagamento
			$status = $this->config->get('payment_pagseguro_lightbox_waiting_payment_status_id');

			if (isset($this->session->data['order_id'])) {
				$order_id = $this->session->data['order_id'];
			} else {
				$order_id = $this->request->post["order_id"];
			}


			$buildQuery = http_build_query($data);
			// $this->log->write('Query Build: '.$buildQuery);

			$mode_sandbox = $this->config->get('payment_pagseguro_lightbox_sandbox');

			if ($mode_sandbox) {
				$url = "https://ws.sandbox.pagseguro.uol.com.br/v2/checkout";
			} else {
				$url = "https://ws.pagseguro.uol.com.br/v2/checkout";
			}

			// $this->log->write('URL: '.$url);

			$curl = curl_init($url);
			curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-Type: application/x-www-form-urlencoded; charset=UTF-8"));
			curl_setopt($curl, CURLOPT_POST, true);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_POSTFIELDS, $buildQuery);
			// $this->log->write('CURL: '.$curl);
			$retorno = curl_exec($curl);
			curl_close($curl);

			// $this->log->write('Retorno: '.$retorno);

			$xml = simplexml_load_string($retorno);
			echo $xml->code;

			$this->model_checkout_order->addOrderHistory($order_id, $status, 'Sua URL de pagamento: https://pagseguro.uol.com.br/v2/checkout/payment.html?code=' . $xml->code, true);

			// $this->log->write('Código da Transação: '. $xml->code . ' - ID: #'.$order_id);
		}
	}


	public function confirm()
	{

		// $this->log->write('Inicio Confirm');

		$this->load->model('checkout/order');

		// Status 2 = Pagamento em Análise
		$status = $this->config->get('payment_pagseguro_lightbox_payment_success_status_id');

		if (isset($this->session->data['order_id'])) {
			$order_id = $this->session->data['order_id'];
		} else {
			$order_id = $this->request->post["order_id"];
		}

		// $this->log->write('Status: '. $status);

		$this->model_checkout_order->addOrderHistory($order_id, $status, '', true);

		if ($order_id) {
			$this->cart->clear();
			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
			unset($this->session->data['comment']);
			unset($this->session->data['coupon']);
		}

		echo "success";
	}



	// Retorno de Notificação de Status
	public function callback()
	{
		// $this->log->write('Inicio Callback');

		$email = $this->config->get('payment_pagseguro_lightbox_email');
		$token = $this->config->get('payment_pagseguro_lightbox_token');
		$mode_sandbox = $this->config->get('payment_pagseguro_lightbox_sandbox');

		if ($mode_sandbox) {
			$url = "https://ws.sandbox.pagseguro.uol.com.br/v3/transactions/notifications/{$_POST['notificationCode']}?email={$email}&token={$token}";
		} else {
			$url = "https://ws.pagseguro.uol.com.br/v3/transactions/notifications/{$_POST['notificationCode']}?email={$email}&token={$token}";
		}

		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$retorno = curl_exec($curl);
		curl_close($curl);

		$xml = simplexml_load_string($retorno);

		$order_id = preg_replace('/[^0-9]/', '', $xml->reference);

		echo $order_id;
		// $this->log->write('Callback ID #:'. $order_id);
		// $this->log->write('Callback Status:'. $xml->status);

		$this->load->model('checkout/order');

		$order_info = $this->model_checkout_order->getOrder($order_id);

		if ($order_info) {

			$this->model_checkout_order->addOrderHistory($order_id, $xml->status, '', true);
		}
	}
}
