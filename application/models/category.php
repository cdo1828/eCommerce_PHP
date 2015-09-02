<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Model {

	function all_categories(){
		$query = "SELECT id, name FROM categories";
		return $this->db->query($query)->result_array();
	}

	function add($post){
		$query = "INSERT INTO categories(name, created_at, updated_at) VALUES (?, NOW(), NOW())";
		$values = array($post['name']);
		$this->db->query($query, $values);
	}

	// Edit Category
	function edit($id){
		$query = "SELECT id, name FROM categories WHERE id = ?";
		$values = $id;
		return $this->db->query($query, $values)->result_array();
	}

	// Update Category
	function update($post){
		$query = "UPDATE categories SET name ='{$post['name']}', updated_at = NOW() WHERE id = '{$post['id']}' ";
		$this->db->query($query);
	}

	// Destroy Category
	function destroy($id){
		$query = "DELETE FROM categories WHERE id = ?";
		$values = $id;
		$this->db->query($query, $values);
	}
	

}

