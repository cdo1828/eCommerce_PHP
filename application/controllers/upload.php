<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('upload');
	}

	function index()
	{
		$this->load->view('upload/upload_form', array('error' => ' ' ));
	}

	function do_upload()
	{
		$config['upload_path'] = 'assets/image/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '4000';
		$config['max_height']  = '2000';

		$this->load->library('upload', $config);
		// redirect_back();


		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('upload/upload_form', $error);
			
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			$this->load->view('upload/upload_success', $data);
			redirect_back();
		}
	}
}
?>