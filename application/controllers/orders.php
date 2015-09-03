<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class orders extends CI_Controller {

	public function checkout(){
		$this->load->model('order');
		$user_id = $this->session->userdata('user_session')['user_id'];
		$info = $this->input->post();

		foreach($info as $key=>$value){

			$this->order->log_order($key, $user_id, $value);
			
		}

		

	}

}