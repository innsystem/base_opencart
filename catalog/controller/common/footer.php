<?php
class ControllerCommonFooter extends Controller {
	public function index() {
		$this->load->language('common/footer');

		$this->load->model('catalog/information');

		$data['informations'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
			if ($result['bottom']) {
				$data['informations'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
					);
			}
		}

		$data['name'] = $this->config->get('config_name');

		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		$data['url_loja'] = $server;

		$data['contact'] = $this->url->link('information/contact');
		$data['return'] = $this->url->link('account/return/add', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap');
		$data['tracking'] = $this->url->link('information/tracking');
		$data['manufacturer'] = $this->url->link('product/manufacturer');
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/login', '', true);
		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);

		$data['endereco'] = $this->config->get('config_address');
		$data['powered'] = sprintf($this->language->get('text_powered'), date('Y', time()));

		$data['text_items'] = sprintf($this->language->get('text_items'), $this->cart->countProducts());

		$data['telephone'] = $this->config->get('config_telephone');
		$data['cellphone'] = $this->config->get('config_fax');
		$retirar = array("(", ")", "-", " ", ".", ",");
		$data['telephoneLink'] = str_replace($retirar, '', $this->config->get('config_telephone'));
		$data['cellphoneLink'] = str_replace($retirar, '', $this->config->get('config_fax'));

		$data['email_admin'] = $this->config->get('config_email');
		$data['hour_open'] = $this->config->get('config_open');

		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}

		$data['scripts'] = $this->document->getScripts('footer');
		$data['styles'] = $this->document->getStyles('footer');

		// Menu
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			if ($category['top']) {
				// Level 2
				$children_data = array();

				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach ($children as $child) {
					$filter_data = array(
						'filter_category_id'  => $child['category_id'],
						'filter_sub_category' => true
						);

					$children_data[] = array(
						'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
						'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
						);
				}

				// Level 1
				$data['categories'][] = array(
					'name'     => $category['name'],
					'children' => $children_data,
					'column'   => $category['column'] ? $category['column'] : 1,
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
					);
			}
		}
				
		/* CUSTOM - REDE SOCIAL */
		$retirar = array("(", ")", "-", " ", ".", ",");
		$data['facebook_status'] = $this->config->get('config_facebook');
		$data['facebook_url'] = $this->config->get('config_facebook_url');
		$data['instagram_status'] = $this->config->get('config_instagram');
		$data['instagram_url'] = $this->config->get('config_instagram_url');
		$data['instagram_widget'] = $this->config->get('config_instagram_widget');
		
		$data['bfloat_status'] = $this->config->get('config_bfloat');
		$data['bfloat_whatsapp'] = str_replace($retirar, '', $this->config->get('config_bfloat_whatsapp'));
		$data['bfloat_facebook'] = $this->config->get('config_bfloat_facebook');
		$data['bfloat_messenger'] = $this->config->get('config_bfloat_messenger');
		$data['bfloat_instagram'] = $this->config->get('config_bfloat_instagram');
		$data['bfloat_mail'] = $this->config->get('config_bfloat_mail');
		/* CUSTOM - REDE SOCIAL */

		return $this->load->view('common/footer', $data);
	}

	public function info() {
		$this->response->setOutput($this->index());
	}

}
