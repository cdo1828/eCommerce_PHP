<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	// All Categories
	public function index(){
		$categories = $this->category->all_categories();
		$this->load->view('categories/index', array('categories' => $categories));
	}

	// Add Category
	public function add(){
		$this->category->add($this->input->post());
		redirect('categories/index');
	}

	// Edit Category
	public function edit($id){
		$categories = $this->category->edit($id);
		$this->load->view('categories/edit', array('categories' => $categories));
	}

	public function update(){
		$this->category->update($this->input->post());
		redirect('categories/index');
	}

	// Destroy Category
	public function destroy($id){
		$this->category->destroy($id);
	}


}

/* End of file categories.php */
/* Location: ./application/controllers/categories.php */