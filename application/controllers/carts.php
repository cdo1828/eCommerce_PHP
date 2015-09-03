<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carts extends CI_Controller {

	public function index(){

		if (empty($this->session->userdata('cart_items'))){

			$this->load->view('carts/index');	

		} else {
			
			$data['cart_items'] = $this->cart->populate_cart($this->session->userdata('cart_items'));

			$this->load->view('carts/index', $data);

		}
	}


	public function add($id){
		
		if($this->session->userdata('cart_items') == null){
			$all_items = array($id);
			
		} else {
			$all_items = $this->session->userdata('cart_items');

			if(in_array($id, $all_items)){
				//do nothing
			} else {
				array_push($all_items, $id);
			}

		}
		
		$this->session->set_userdata('cart_items', $all_items);

		redirect('products');
	}

	public function destroy($id){

		$cart_items = $this->session->userdata('cart_items');


		foreach ($cart_items as $key => $item) {
			if ($item == $id) {
				unset($cart_items[$key]);
				break;
			}
		}

		$this->session->set_userdata('cart_items', $cart_items);
		redirect('/carts/index');
	}	

}