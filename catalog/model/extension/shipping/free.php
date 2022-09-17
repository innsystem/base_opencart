<?php
class ModelExtensionShippingFree extends Model
{
	function getQuote($address)
	{
		$this->load->language('extension/shipping/free');

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "zone_to_geo_zone WHERE geo_zone_id = '" . (int)$this->config->get('shipping_free_geo_zone_id') . "' AND country_id = '" . (int)$address['country_id'] . "' AND (zone_id = '" . (int)$address['zone_id'] . "' OR zone_id = '0')");

		if (!$this->config->get('shipping_free_geo_zone_id')) {
			$status = true;
		} elseif ($query->num_rows) {
			$status = true;
		} else {
			$status = false;
		}

		$method_data = array();

		if ($this->cart->getSubTotal() < $this->config->get('shipping_free_total')) {
			$status = false;
		}

		$json_file = @file_get_contents("https://viacep.com.br/ws/" . $this->session->data['shipping_address']['postcode'] . "/json/");
		$json_str = json_decode($json_file, true);
		$returnCity = $json_str['localidade'];
		$returnUF = $json_str['uf'];
		
		$data['returnCity'] = $returnCity;
		$data['returnUF'] = $returnUF;


		if ($returnCity == $this->config->get('shipping_free_city_only') && $this->cart->getSubTotal() >= $this->config->get('shipping_free_total')) {
			$status = true;
		} else {
			$status = false;
		}

		if ($status) {
			$quote_data = array();

			$quote_data['free'] = array(
				'code'         => 'free.free',
				'title'        => '<b>' . $this->language->get('text_description') . ' para ' . $returnCity . '</b>',
				'cost'         => 0.00,
				'tax_class_id' => 0,
				// 'text'         => $this->currency->format(0.00, $this->session->data['currency'])
				'text'         => '<b>GRÁTIS</b>'
			);

			$method_data = array(
				'code'       => 'free',
				'title'      => $this->language->get('text_title'),
				'quote'      => $quote_data,
				'sort_order' => $this->config->get('shipping_free_sort_order'),
				'error'      => false
			);
		} // end if status

		return $method_data;
	}
}
