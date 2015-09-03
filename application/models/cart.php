<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cart extends CI_Model {

	function populate_cart(){

		$query = "SELECT * FROM products";
		return $this->db->query($query);
	
	}
}
