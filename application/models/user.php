<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
	function login($email){
	$query = "SELECT id, email, password, username FROM users WHERE email ='{$email}'";
	return $this->db->query($query)->row_array();
	}
	
	function registration($post){
		$query = "INSERT INTO users(username, password, email, created_at, updated_at) VALUES(?,?,?, NOW(),NOW())";
		$values = array($post['username'], $post['password'], $post['email']);
		$this->db->query($query, $values);
	}

}
