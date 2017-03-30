<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Api extends CI_Controller {
	private $actions = [
		'user'
	];

	public function index() {
		$uri = $_SERVER['REQUEST_URI'];
		preg_match("/^\/api\/(.*)/", $uri, $matches);
		if (isset($matches[1]) && in_array($matches[1], $this->actions)) {
			$this->$matches[1]();
		} else {
			show_404('Illegal action');
		}
	}

	protected function user() {
		$action= $this->input->post('action');
		switch ($action) {
			case 'signup':
				$params = $this->input->post();
				$params['ip'] = $this->input->ip_address();
				$res = UserOperator::add($params);
				echo json_encode($res);
				break;
			case 'signin':
				$params = $this->input->post();
				$res = UserOperator::login($params);
				echo json_encode($res);
				break;
			case 'delete':break;
			default: break;
		}
	}
}
