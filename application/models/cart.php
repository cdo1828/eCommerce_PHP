<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cart extends CI_Model {

	function populate_cart($id){

		$query = "SELECT * FROM products
				WHERE id = {$id}"
	
	}
	
	function remove_from_cart(){
		
	}

	function update_cart(){

	}

}
