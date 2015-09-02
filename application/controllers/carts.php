<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carts extends CI_Controller {

	public function cart(){
		if (empty($cart_items)) {
			$this->load->view('carts/cart');	
		}
		
	}

	public function add($id){
		$items['id'] = $id;
		$this->session->set_userdata('cart_items', $items );

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