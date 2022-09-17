<?php
class ControllerExtensionPaymentFreeCheckout extends Controller {
	public function index() {
		// $data['continue'] = $this->url->link('checkout/success');

		return $this->load->view('extension/payment/free_checkout');
	}

	public function confirm() {

		$json = array();
		
		if (isset($this->session->data['payment_method']['code']) && $this->session->data['payment_method']['code'] == 'free_checkout') {
			$this->load->model('checkout/order');

			$comment = "Pagamento a ser realizado na retirada.";

			$this->model_checkout_order->addOrderHistory($this->session->data['order_id'], 1, $comment, true);
			// $this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $this->config->get('payment_bank_transfer_order_status_id'), $comment, true);
			$json['redirect'] = $this->url->link('checkout/success');
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
}
