<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carts extends CI_Controller {
	protected $cart_items = array();
	// var_dump($cart_items);

	public function index()
	{
		$this->load->view('cart/index');
	}

	public function cart(){
		// $product_id = $this->session->userdata('items');
		if (empty($cart_items)) {
			$this->load->view('cart/cart');	
		}else{
			$product_id = $this->cart_items;
			$product = $this->product->show_cart($product_id);
			$this->load->view('cart/cart', array('products' => $product));
		}
		
	}

	public function add_cart($id){
		// if (empty($cart_items) && $cart_items < 1) {
			$cart_items['id'] = $id;
			$this->session->set_userdata('items', $cart_items);
		// }
		// else{
			// $push = $this->session->userdata('items');
			// array_push($cart_items, $id);
			// $this->session->set_userdata('items', $cart_items);			
		// }
		// $this->load->view('cart/cart');
		redirect('/');
	}

	public function check_out(){
		var_dump($this->input->post());
		die();
		$this->load->view('cart/check_out');
	}

	public function cart_delete($id){
		$arr = $this->session->userdata('items');
		foreach ($arr as $r) {
			if ($r == $id) {
				var_dump($this->session->userdata('items')[0]);
			}
		}
		// redirect('cart');
	// $this->session->unset_userdata('items');
	}
}
