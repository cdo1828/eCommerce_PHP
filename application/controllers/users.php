<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function register_page(){
		$this->load->view('users/registration');
	}

	public function login_page(){
		$this->load->view('users/login');
	}

	//Login
	public function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->user->login($email);

		if ($user && $user['password'] == $password) {
			$profile = array(
				'user_id' => $user['id'],
				'user_username' => $user['username'],
				'user_email' => $user['email'],
				'is_logged_in' => true
			);
			$this->session->set_userdata('user_session', $profile);
			redirect('/');
		}else{
			$this->session->set_flashdata('error', 'Invalid Email or Password!');
			redirect('login');
		}
	}

	public function registration(){
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email");
		$this->form_validation->set_rules("username", "Username", "trim|required|min_length[1]");
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[1]|max_length[16]");

		if ($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('error', validation_errors());	
			redirect('/users/registration');
		}else{
			if ($this->input->post('password') != $this->input->post('confirm_password')) {
				$this->session->set_flashdata('error', 'Confirmation Password has to match !');	
				redirect('/users/registration');
			}else{
				$email = $this->input->post('email');
				$this->user->registration($this->input->post());
				$user = $this->user->login($email);
				$profile = array(
					'user_id' => $user['id'],
					'user_username' => $user['username'],
					'user_email' => $user['email'],
					'is_logged_in' => true
				);
				$this->session->set_userdata('user_session',$profile);

				$this->session->set_flashdata('success', "Your account successfully registered !");
				redirect('/');
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
			$this->session->set_flashdata('success', 'You are successfully signed out');
		redirect('/');
	}

}
