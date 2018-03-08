<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Kota extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_kota');
		$this->load->library(array('PHPExcel','PHPExcel/IOFactory'));
		if($this->session->userdata('login') == '')
		{
			redirect(base_url().'login');
		}	
	}

	function index()
	{
		$this->load->database();
		$query = $this->db->query("SELECT * FROM hrd_master_kota WHERE status != '3'");
		$config['base_url'] = base_url().'admin/kota/index/';
		$config['total_rows'] = $query->num_rows();
		//pagination settings
		$config['per_page'] = "25";
		$config["uri_segment"] =4;
		$choice = $config["total_rows"]/$config["per_page"];
		$config["num_links"] = floor($choice);
		// integrate bootstrap pagination
		$config['full_tag_open'] = '<div class="pagination"><ul>';
		$config['full_tag_close'] = '</ul></div>';
		$config['first_link'] = false;
		$config['last_link'] = false;
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = '«';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = '»';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		$from = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
		// get stock list
		$halaman['data'] = $this->M_kota->dataUSer($config["per_page"], $from, NULL);
		$halaman['pages'] = $this->pagination->create_links();
		$halaman['provinsi'] = $this->M_kota->cari_provinsi();
		$this->load->view('admin/daftar_kota', $halaman);
	}

	function import_kota()
	{
		$this->load->view('admin/import_data_kota');
	}

	function upload_kota()
	{
		$fileName = $this->input->post('file', TRUE);
         
        $config['upload_path'] = './assets/excel/'; 
  		$config['file_name'] = $fileName;
  		$config['allowed_types'] = '*';
  		$config['encrypt_name']= TRUE;
  		$config['max_size'] = 0;
         
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
         
        if (!$this->upload->do_upload('file')) 
        {
   			$error = $this->upload->display_errors();
   			$this->session->set_flashdata('pesan',$error); 
   			redirect(''); 
 		} 
 		else 
 		{
   			$media = $this->upload->data();
   			$inputFileName = './assets/excel/'.$media['file_name'];
   			try 
   			{
    			$inputFileType = IOFactory::identify($inputFileName);
    			$objReader = IOFactory::createReader($inputFileType);
    			$objPHPExcel = $objReader->load($inputFileName);
  			} 
  			catch(Exception $e) 
  			{
    			die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
  			}
 
  			$sheet = $objPHPExcel->getSheet(0);
  			$highestRow = $sheet->getHighestRow();
  			$highestColumn = $sheet->getHighestColumn();

  			for ($row = 2; $row <= $highestRow; $row++)
  			{  
   				$rowData = $sheet->rangeToArray('A' . $row . ':' . $highestColumn . $row,
     							NULL,
     							TRUE,
     							FALSE);
   				$data = array(
     						//"a"=> trim(preg_replace("/[^a-zA-Z0-9]/", "", $rowData[0][0])), // opsional hapus spasi depan
     						"id_provinsi"=> $rowData[0][0],
     						"nama_kota"=> $rowData[0][1],
     						"status"=> $rowData[0][2]);
   				$this->db->insert("hrd_master_kota",$data);
 			} 
   			unlink($inputFileName); // hapus file temp
   			$count = $highestRow;
   			$this->session->set_flashdata('pesan_import','Upload berhasil, Total: <b>'.$count.'</b> data.'); 
   			redirect(base_url().'admin/kota');
 		}
 	}

 	function tambah_kota()
 	{
 		$data['provinsi'] = $this->M_kota->cari_provinsi();
 		$this->load->view('admin/tambah_kota', $data);
 	}

 	function simpan()
 	{
 		$provinsi = $this->input->post('provinsi');
 		$nama_kota = $this->input->post('nama_kota');
 		$status = $this->input->post('status');

 		$data = array(
 					'id_provinsi' => $provinsi,
 					'nama_kota' => $nama_kota,
 					'status' => $status
 				);
 		$simpan = $this->M_kota->insert('hrd_master_kota', $data);
 		redirect(base_url().'kota');
 	}
}