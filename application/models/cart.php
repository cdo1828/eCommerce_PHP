<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cart extends CI_Model {

	function populate_cart($id){

		$ids = join(', ',$id);



		$query = "SELECT * FROM products WHERE id in ({$ids})";
		// var_dump($query);
		// die();
		return $this->db->query($query, $ids)->result_array();
	
	}
}
