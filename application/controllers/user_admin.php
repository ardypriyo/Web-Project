<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class User_admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login') == '')
		{
			redirect(base_url().'login');
		}
		$this->load->model('M_user_admin');
	}

	function index()
	{
		$data['user_admin'] = $this->M_user_admin->load_data();
		$this->load->view('admin/daftar_user', $data);
	}
}