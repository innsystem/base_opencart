<?php
class ControllerExtensionModuleFeatured extends Controller {
	public function index($setting) {
		static $module = 30;
		
		$this->load->language('extension/module/featured');

		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/swiper.min.css');
		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/opencart.css');
		$this->document->addScript('catalog/view/javascript/jquery/swiper/js/swiper.jquery.js');
		$this->document->addScript('catalog/view/javascript/jquery/swiper/js/swiper.min.js');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');

		$data['heading_title'] = $setting['name'];

		$data['type'] = $setting['type'];

		$data['products'] = array();

		if (!$setting['limit']) {
			$setting['limit'] = 4;
		}

		if (!empty($setting['product'])) {
			$products = array_slice($setting['product'], 0, (int)$setting['limit']);

			foreach ($products as $product_id) {
				$product_info = $this->model_catalog_product->getProduct($product_id);

				if ($product_info) {
					if ($product_info['image']) {
						$image = $this->model_tool_image->resize($product_info['image'], $setting['width'], $setting['height']);
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
					}

					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					} else {
						$price = false;
					}

					if (!is_null($product_info['special']) && (float)$product_info['special'] >= 0) {
						$special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
						$tax_price = (float)$product_info['special'];
					} else {
						$special = false;
						$tax_price = (float)$product_info['price'];
					}

					if ($this->config->get('config_tax')) {
						$tax = $this->currency->format($tax_price, $this->session->data['currency']);
					} else {
						$tax = false;
					}

					if ($this->config->get('config_review_status')) {
						$rating = $product_info['rating'];
					} else {
						$rating = false;
					}
				
					// gera porcentagem de desconto do Valor DE , POR:
					if($product_info['special']){
						$valor_de = $product_info['price'];
						$valor_por = $product_info['special'];
	
						$formula = $valor_por * 100;
						$formula1 = $formula / $valor_de;
						$formula2 = $formula1 - 100;
						
						$valor_desconto = number_format($formula2, 0, ',', ' ');;
					}else{
						$valor_desconto = false;
					}
	

					$data['products'][] = array(
						'product_id'  => $product_info['product_id'],
						'thumb'       => $image,
						'name'        => $product_info['name'],
						'description' => utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
						'price'       => $price,
						'special'     => $special,
						'valor_desconto'     => $valor_desconto,
						'tax'         => $tax,
						'rating'      => $rating,
						'quantity'    => $product_info['quantity'],
						'shipping'    => $product_info['shipping'],
						'href'        => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
					);
				}
			}
		}

			$data['module'] = $module++;

		if ($data['products']) {
			return $this->load->view('extension/module/featured', $data);
		}
	}
}