<?php
class ControllerExtensionModuleLatest extends Controller {
	public function index($setting) {
		static $module = 40;

		$this->load->language('extension/module/latest');

		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/swiper.min.css');
		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/opencart.css');
		$this->document->addScript('catalog/view/javascript/jquery/swiper/js/swiper.jquery.js');
		$this->document->addScript('catalog/view/javascript/jquery/swiper/js/swiper.min.js');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['heading_title'] = $setting['name'];

		$data['type'] = $setting['type'];

		$data['products'] = array();

		$results = $this->model_catalog_product->getLatestProducts($setting['limit']);

		if ($results) {
			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if (!is_null($result['special']) && (float)$result['special'] >= 0) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$tax_price = (float)$result['special'];
				} else {
					$special = false;
					$tax_price = (float)$result['price'];
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format($tax_price, $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = $result['rating'];
				} else {
					$rating = false;
				}
				
				// gera porcentagem de desconto do Valor DE , POR:
				if($result['special']){
					$valor_de = $result['price'];
					$valor_por = $result['special'];

					$formula = $valor_por * 100;
					$formula1 = $formula / $valor_de;
					$formula2 = $formula1 - 100;
					
					$valor_desconto = number_format($formula2, 0, ',', ' ');;
				}else{
					$valor_desconto = false;
				}


				$data['products'][] = array(
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'valor_desconto'     => $valor_desconto,
					'tax'         => $tax,
					'rating'      => $rating,
					'quantity'    => $result['quantity'],
					'shipping'    => $result['shipping'],
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				);
			}

			$data['module'] = $module++;

			return $this->load->view('extension/module/latest', $data);
		}
	}
}
