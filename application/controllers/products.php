<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct(){

		parent::__construct();
		$this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[1]|max_length[15]');
		$this->form_validation->set_rules('description', 'Description', 'trim|required|min_length[1]|max_length[120]');
		$this->form_validation->set_rules('price', 'Price', 'trim|required|numeric|greater_than[0]');
	}


	// All Products
	public function index(){
		$products = $this->product->all_products();
		$this->load->view('products/index', array('products' => $products));
	}

	// Add Page
	public function add_page(){
		$categories = $this->category->all_categories();
		$this->load->view('products/create', array('categories' => $categories));
	}
	
	// Add Product
	public function add(){
		if ($this->form_validation->run() === TRUE){
			// Images
			$url = $this->do_upload();
			$this->product->create($this->input->post(), $url);
			// $this->product->create($url);

			redirect('/products');
		}else{
			$this->session->set_flashdata('errors', validation_errors());
			redirect_back();
		}
	}

	// Edit Product
	public function edit($id){
		$categories = $this->category->all_categories();
		$product = $this->product->edit($id);
		$this->load->view('products/edit', array('products' => $product, 'categories' => $categories));
	}

	// Show Product
	public function show($id){
		$product = $this->product->show($id);
		$this->load->view('products/show', array('products' => $product));
	}

	// Update Product
	public function update(){	
		if ($this->form_validation->run() === TRUE){
			$this->product->update($this->input->post());
			redirect('/products');
		}else{
			$this->session->set_flashdata('errors', validation_errors());
			redirect_back();
		}
	}

	//Delete one item
	public function destroy($id){
		$this->product->destroy($id);
		redirect('products');		
	}

	// Image Uploader Do !!!
	private function do_upload(){
		$type = explode('.', $_FILES["pic"]["name"]);
		$type = strtolower($type[count($type)-1]);
		$url = "./assets/images/product_images/".uniqid(rand()).'.'.$type;
		if(in_array($type, array("jpg", "jpeg", "gif", "png")))
			if(is_uploaded_file($_FILES["pic"]["tmp_name"]))
				if(move_uploaded_file($_FILES["pic"]["tmp_name"],$url))
					return $url;
		return "";
	}


}
