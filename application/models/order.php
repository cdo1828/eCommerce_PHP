<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class order extends CI_Model {

	function log_order($id, $user_id, $quantity){

		$query = "INSERT INTO orders (product_id, user_id,  quantity, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())";
		$values = array($id, $user_id, $quantity);
		$this->db->query($query, $values);
		
	}
}
