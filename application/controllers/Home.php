<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class Home extends CI_Controller 
	{
    	public function __construct() 
    	{
            parent::__construct();
            if ($this->session->userdata('login') !== 'login')
            {
                redirect(base_url().'Admin');
            }
    	}

    	public function index()
    	{
			$this->load->view('home');
    	}
}
?>