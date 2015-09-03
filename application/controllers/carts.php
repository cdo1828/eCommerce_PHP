<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carts extends CI_Controller {

	public function index(){

	if (empty($this->session->userdata('cart_items'))) {

			$this->load->view('carts/index');	
		} 
		else {

			$data['cart_items'] = $this->session->userdata('cart_items');
			$this->load->view('carts/index', $data);
		}
	}


	public function add($id){
		
		if($this->session->userdata('cart_items') == null){
			$all_items = array($id);
			
		} else {
			$all_items = $this->session->userdata('cart_items');
			array_push($all_items, $id);
		}
		
		$this->session->set_userdata('cart_items', $all_items);
		


		redirect('products');
	}

	public function destroy($id){
		$arr = $this->session->userdata('cart_items');
		foreach ($arr as $r) {
			if ($arr == $id) {
				$this->session->unset_userdata('cart_items');
			}
		}
		redirect('cart');
	// $this->session->unset_userdata('items');
	}	



}