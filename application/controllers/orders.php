<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class orders extends CI_Controller {

	public function checkout(){
		$this->load->model('order');
		$info = $this->input->post();

		// var_dump($info);
		foreach($info as $key=>$value){

			$this->order->log_order(explode('_', $key), $value);
			// var_dump($key);
			// var_dump($value);
			// var_dump(explode('_', $key));
		}

		}

}