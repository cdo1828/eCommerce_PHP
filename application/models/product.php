<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model {

	// index -> All Products
	function all_products(){
		$query = "SELECT id, title, description, price FROM products";
		return $this->db->query($query)->result_array();
	}

	// Create Product
	function create($post){
		$query = "INSERT INTO products(title, description, price, user_id, category_id, created_at, updated_at) VALUES(?,?,?,?,?, NOW(), NOW())";
		$values = array($post['title'], $post['description'], $post['price'], $post['user_id'], $post['category_id']);
		$this->db->query($query, $values);
	}

	// Show Product
	function show($id){
		$query = "SELECT * FROM products WHERE id = ?";
		$values = $id;
		return $this->db->query($query, $values)->result_array();
	}

	// Edit Product
	function edit($id){
		$query = "SELECT products.id, products.title, products.description, products.price, products.category_id, categories.name
				  FROM products 
				  LEFT JOIN categories on products.category_id = categories.id
				  WHERE products.id = ?";
		$values = $id;
		return $this->db->query($query, $values)->result_array();
	}

	// Update Product
	function update($post){
		$query = "UPDATE products SET title ='{$post['title']}', description = '{$post['description']}', price = '{$post['price']}', category_id = '{$post['category_id']}', updated_at = NOW() WHERE id = '{$post['id']}' ";
		$this->db->query($query);
	}

	// Destroy Product
	function destroy($id){
		$query = "DELETE FROM products WHERE id = ?";
		$values = $id;
		$this->db->query($query, $values);
	}
	
}
