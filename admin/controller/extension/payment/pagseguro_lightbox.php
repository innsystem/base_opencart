<?php
class ControllerExtensionPaymentPagseguroLightbox extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/payment/pagseguro_lightbox');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('payment_pagseguro_lightbox', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['email'])) {
			$data['error_email'] = $this->error['email'];
		} else {
			$data['error_email'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/payment/pagseguro_lightbox', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/payment/pagseguro_lightbox', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true);

		if (isset($this->request->post['payment_pagseguro_lightbox_email'])) {
			$data['payment_pagseguro_lightbox_email'] = $this->request->post['payment_pagseguro_lightbox_email'];
		} else {
			$data['payment_pagseguro_lightbox_email'] = $this->config->get('payment_pagseguro_lightbox_email');
		}

		if (isset($this->request->post['payment_pagseguro_lightbox_token'])) {
			$data['payment_pagseguro_lightbox_token'] = $this->request->post['payment_pagseguro_lightbox_token'];
		} else {
			$data['payment_pagseguro_lightbox_token'] = $this->config->get('payment_pagseguro_lightbox_token');
		}

		if (isset($this->request->post['payment_pagseguro_lightbox_sandbox'])) {
			$data['payment_pagseguro_lightbox_sandbox'] = $this->request->post['payment_pagseguro_lightbox_sandbox'];
		} else {
			$data['payment_pagseguro_lightbox_sandbox'] = $this->config->get('payment_pagseguro_lightbox_sandbox');
		}

		if (isset($this->request->post['payment_pagseguro_lightbox_debug'])) {
			$data['payment_pagseguro_lightbox_debug'] = $this->request->post['payment_pagseguro_lightbox_debug'];
		} else {
			$data['payment_pagseguro_lightbox_debug'] = $this->config->get('payment_pagseguro_lightbox_debug');
		}

		if (isset($this->request->post['payment_pagseguro_lightbox_total'])) {
			$data['payment_pagseguro_lightbox_total'] = $this->request->post['payment_pagseguro_lightbox_total'];
		} else {
			$data['payment_pagseguro_lightbox_total'] = $this->config->get('payment_pagseguro_lightbox_total');
		}

		if (isset($this->request->post['payment_pagseguro_lightbox_waiting_payment_status_id'])) {
			$data['payment_pagseguro_lightbox_waiting_payment_status_id'] = $this->request->post['payment_pagseguro_lightbox_waiting_payment_status_id'];
		} else {
			$data['payment_pagseguro_lightbox_waiting_payment_status_id'] = $this->config->get('payment_pagseguro_lightbox_waiting_payment_status_id');
		}

		if (isset($this->request->post['payment_pagseguro_lightbox_in_analysis_status_id'])) {
			$data['payment_pagseguro_lightbox_in_analysis_status_id'] = $this->request->post['payment_pagseguro_lightbox_in_analysis_status_id'];
		} else {
			$data['payment_pagseguro_lightbox_in_analysis_status_id'] = $this->config->get('payment_pagseguro_lightbox_in_analysis_status_id');
		}

		if (isset($this->request->post['payment_pagseguro_lightbox_payment_success_status_id'])) {
			$data['payment_pagseguro_lightbox_payment_success_status_id'] = $this->request->post['payment_pagseguro_lightbox_payment_success_status_id'];
		} else {
			$data['payment_pagseguro_lightbox_payment_success_status_id'] = $this->config->get('payment_pagseguro_lightbox_payment_success_status_id');
		}

		if (isset($this->request->post['payment_pagseguro_lightbox_concluded_status_id'])) {
			$data['payment_pagseguro_lightbox_concluded_status_id'] = $this->request->post['payment_pagseguro_lightbox_concluded_status_id'];
		} else {
			$data['payment_pagseguro_lightbox_concluded_status_id'] = $this->config->get('payment_pagseguro_lightbox_concluded_status_id');
		}

		if (isset($this->request->post['payment_pagseguro_lightbox_dispute_status_id'])) {
			$data['payment_pagseguro_lightbox_dispute_status_id'] = $this->request->post['payment_pagseguro_lightbox_dispute_status_id'];
		} else {
			$data['payment_pagseguro_lightbox_dispute_status_id'] = $this->config->get('payment_pagseguro_lightbox_dispute_status_id');
		}

		if (isset($this->request->post['payment_pagseguro_lightbox_returned_status_id'])) {
			$data['payment_pagseguro_lightbox_returned_status_id'] = $this->request->post['payment_pagseguro_lightbox_returned_status_id'];
		} else {
			$data['payment_pagseguro_lightbox_returned_status_id'] = $this->config->get('payment_pagseguro_lightbox_returned_status_id');
		}

		if (isset($this->request->post['payment_pagseguro_lightbox_canceled_status_id'])) {
			$data['payment_pagseguro_lightbox_canceled_status_id'] = $this->request->post['payment_pagseguro_lightbox_canceled_status_id'];
		} else {
			$data['payment_pagseguro_lightbox_canceled_status_id'] = $this->config->get('payment_pagseguro_lightbox_canceled_status_id');
		}

		if (isset($this->request->post['payment_pagseguro_lightbox_refunded_status_id'])) {
			$data['payment_pagseguro_lightbox_refunded_status_id'] = $this->request->post['payment_pagseguro_lightbox_refunded_status_id'];
		} else {
			$data['payment_pagseguro_lightbox_refunded_status_id'] = $this->config->get('payment_pagseguro_lightbox_refunded_status_id');
		}

		if (isset($this->request->post['payment_pagseguro_lightbox_reversed_status_id'])) {
			$data['payment_pagseguro_lightbox_reversed_status_id'] = $this->request->post['payment_pagseguro_lightbox_reversed_status_id'];
		} else {
			$data['payment_pagseguro_lightbox_reversed_status_id'] = $this->config->get('payment_pagseguro_lightbox_reversed_status_id');
		}

		if (isset($this->request->post['payment_pagseguro_lightbox_voided_status_id'])) {
			$data['payment_pagseguro_lightbox_voided_status_id'] = $this->request->post['payment_pagseguro_lightbox_voided_status_id'];
		} else {
			$data['payment_pagseguro_lightbox_voided_status_id'] = $this->config->get('payment_pagseguro_lightbox_voided_status_id');
		}

		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		if (isset($this->request->post['payment_pagseguro_lightbox_geo_zone_id'])) {
			$data['payment_pagseguro_lightbox_geo_zone_id'] = $this->request->post['payment_pagseguro_lightbox_geo_zone_id'];
		} else {
			$data['payment_pagseguro_lightbox_geo_zone_id'] = $this->config->get('payment_pagseguro_lightbox_geo_zone_id');
		}

		$this->load->model('localisation/geo_zone');

		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

		if (isset($this->request->post['payment_pagseguro_lightbox_status'])) {
			$data['payment_pagseguro_lightbox_status'] = $this->request->post['payment_pagseguro_lightbox_status'];
		} else {
			$data['payment_pagseguro_lightbox_status'] = $this->config->get('payment_pagseguro_lightbox_status');
		}

		if (isset($this->request->post['payment_pagseguro_lightbox_sort_order'])) {
			$data['payment_pagseguro_lightbox_sort_order'] = $this->request->post['payment_pagseguro_lightbox_sort_order'];
		} else {
			$data['payment_pagseguro_lightbox_sort_order'] = $this->config->get('payment_pagseguro_lightbox_sort_order');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/payment/pagseguro_lightbox', $data));
	}

	private function validate() {
		if (!$this->user->hasPermission('modify', 'extension/payment/pagseguro_lightbox')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if (!$this->request->post['payment_pagseguro_lightbox_email']) {
			$this->error['email'] = $this->language->get('error_email');
		}

		if (!$this->request->post['payment_pagseguro_lightbox_token']) {
			$this->error['token'] = $this->language->get('error_token');
		}

		return !$this->error;
	}
}