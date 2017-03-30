<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Geetest extends CI_Controller {

	public function index()
	{
		session_start();
		/**
		 * 使用Get的方式返回：challenge和capthca_id 此方式以实现前后端完全分离的开发模式 专门实现failback
		 * @author Tanxu
		 */
		$GtSdk = new \GeetestLib(CAPTCHA_ID, PRIVATE_KEY);
		$data = array(
			'ip_address' => $this->input->ip_address() # 请在此处传输用户请求验证时所携带的IP
		);

		$status = $GtSdk->pre_process($data, 1);
		$_SESSION['gtserver'] = $status;
		echo $GtSdk->get_response_str();
	}
}
