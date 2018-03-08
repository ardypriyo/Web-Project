<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class User extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_user');
		if($this->session->userdata('login') == '')
		{
			redirect(base_url().'login');
		}
	}

	function index()
	{

	}
}