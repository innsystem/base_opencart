<?php
class ControllerExtensionModuleRandom extends Controller {
	public function index($setting) {
		static $module = 50;
		
		$this->load->language('extension/module/random');

		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/swiper.min.css');
		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/opencart.css');
		$this->document->addScript('catalog/view/javascript/jquery/swiper/js/swiper.jquery.js', 'footer');
		$this->document->addScript('catalog/view/javascript/jquery/swiper/js/swiper.min.js', 'footer');

		$this->load->model('catalog/product');
		$this->load->model('catalog/random');

		$this->load->model('tool/image');

		$data['heading_title'] = $setting['name'];

		$data['type'] = $setting['type'];

		$data['products'] = array();

		if (!$setting['limit']) {
			$setting['limit'] = 4;
		}

		$filter_data = array(
			'sort'  => 'p.date_added',
			'order' => 'DESC',
			'start' => 0,
			'limit' => $setting['limit']
			);


				// $product_info = $this->model_catalog_product->getProduct($product_id);
		$results = $this->model_catalog_random->getRandomProducts($filter_data);
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

				if ($result['price']) {
					if (!is_null($result['special']) && (float)$result['special'] >= 0) {
						$priceProduct = $result['special'];
					} else {
						$priceProduct = $result['price'];
					}

					$priceProductNumber = str_replace(".", "", $priceProduct);

					$minimum_parcela = '960';

					$parc[1] = '1.0000';
					$parc[2] = '1.0000';
					$parc[3] = '1.0000';
					$parc[4] = '1.0000';
					$parc[5] = '1.0000';
					$parc[6] = '1.0000';
					$parc[7] = '1.0000';
					$parc[8] = '1.0000';
					$parc[9] = '1.0000';
					$parc[10] = '1.0000';
					$parc[11] = '1.0000';
					$parc[12] = '1.0000';

					$var = '';
					for ($i = 1; $i <= 12; $i++) {
						$conf = ($priceProductNumber * $parc[$i]) / $i;
						$conf = number_format($conf * '0.01', 4);
						$conf = str_replace(",", "", $conf);
						$conf = number_format($conf, 2, ',', '.');
						$confV = str_replace(",", "", $conf);
						$confV = str_replace(".", "", $confV);

						// if ($i == '12') {
						// 	$te = 'ou <b>' . $i . "x de R$ " . $conf . '</b> (com juros)';
						// 	$parcelamento = $te;
						// }
						if ($confV > $minimum_parcela) {
							$te = 'ou <b>' . $i . "x de R$ " . $conf . '</b> (sem juros)';
							$parcelamento = $te;
						} else {
							if ($i == '1') {
								$te = 'ou <b>' . $i . "x de R$ " . $conf . '</b> (sem juros)';
							} else if ($i == '2') {
								$te = 'ou <b>' . $i . "x de R$ " . $conf . '</b> (sem juros)';
							} else if ($i == '3') {
								$te = 'ou <b>' . $i . "x de R$ " . $conf . '</b> (sem juros)';
							} else if ($i == '4') {
								$te = 'ou <b>' . $i . "x de R$ " . $conf . '</b> (sem juros)';
							} else {
								$te = 'ou <b>' . $i . "x de R$ " . $conf . '</b> (sem juros)';
							}
							$parcelamento = $te;
						}
					}
				} // if se existe preco
				// Funcao de Parcelamento na Página do produto


				$data['products'][] = array(
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'valor_desconto' => $valor_desconto,
					'parcelamento'   => $parcelamento,
					'tax'         => $tax,
					'rating'      => $rating,
					'quantity'    => $result['quantity'],
					'shipping'    => $result['shipping'],
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
					);
			}
		}		

		$data['module'] = $module++;
		

		if ($data['products']) {
			return $this->load->view('extension/module/random', $data);
		}
	}
}