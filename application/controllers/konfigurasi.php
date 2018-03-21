<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Konfigurasi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login') == '')
		{
			redirect(base_url().'login');
		}
		$this->load->model('M_konfigurasi');
	}

	function index()
	{
		$load_data = $this->M_konfigurasi->load_data();
		$jml = count($load_data);
		if($jml > 0)
		{
			foreach($load_data as $row)
			{
				$id_param = $row['id'];
				$bulan = $row['bulan'];
				$tahun = $row['tahun'];
			}

			$data = array(
					'id' => $id_param,
					'bulan' => $bulan,
					'tahun' => $tahun
				);

			$this->load->view('admin/konfigurasi', $data);
		}
		else
		{
			echo "tidak ada data";
		}
	}
}