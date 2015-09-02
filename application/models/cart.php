<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cart extends CI_Model {

	function populate_cart($id){

		$query = "SELECT * FROM products WHERE id in (?)";
		$values = $id;
		return $this->db->query($query,$values);
	
	}
}
