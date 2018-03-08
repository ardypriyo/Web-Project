<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Admin extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
		$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
		if($this->session->userdata('login') == '')
		{
			redirect(base_url().'login');
		}
	}

	function index()
	{
		$this->load->view('admin/dashboard');
	}

	function email_config()
	{
		$cari = $this->M_admin->cari_setting();
		foreach($cari as $cari)
		{
			$pengirim = $cari['nama_pengirim'];
			$host = $cari['smtp_host'];
			$usr = $cari['smtp_user'];
			$pass = base64_decode($cari['smtp_password']);
			$port = $cari['smtp_port'];
			$keamanan = $cari['keamanan'];
		}

		$data = array(
				'pengirim' => $pengirim,
				'host' => $host,
				'usr' => $usr,
				'pass' => $pass,
				'port' => $port,
				'keamanan' => $keamanan
			);
		$this->load->view('admin/email_config', $data);
	}

	function edit_email_config()
	{
		$cari = $this->M_admin->cari_setting();
		foreach($cari as $cari)
		{
			$pengirim = $cari['nama_pengirim'];
			$host = $cari['smtp_host'];
			$usr = $cari['smtp_user'];
			$pass = base64_decode($cari['smtp_password']);
			$port = $cari['smtp_port'];
			$keamanan = $cari['keamanan'];
		}

		$data = array(
				'pengirim' => $pengirim,
				'host' => $host,
				'usr' => $usr,
				'pass' => $pass,
				'port' => $port,
				'keamanan' => $keamanan
			);
		$this->load->view('admin/edit_email_config', $data);
	}

	function simpan_email_config()
	{
		$pengirim = $this->input->post('nama');
		$host = $this->input->post('smtp_host');
		$usr = $this->input->post('smtp_user');
		$pass = base64_encode($this->input->post('smtp_password'));
		$port = $this->input->post('smtp_port');
		$keamanan = $this->input->post('keamanan');

		$data = array(
				'nama_pengirim' => $pengirim,
				'smtp_host' => $host,
				'smtp_user' => $usr,
				'smtp_password' => $pass,
				'smtp_port' => $port,
				'keamanan' => $keamanan
			);

		$simpan =$this->M_admin->update('hrd_email_config', $data);
		if($simpan)
		{
			$this->session->set_flashdata('pesan1','Konfigurasi Email Berhasil Diperbaharui');
			redirect(base_url().'email_config');
		}
		else
		{
			$this->session->set_flashdata('pesan2','Konfigurasi Email Gagal Diperbaharui');
			redirect(base_url().'email_config');	
		}
	}
}