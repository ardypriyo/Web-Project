<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Hari_libur extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login') == '')
		{
			redirect(base_url().'login');
		}
		$this->load->model('M_hari_libur');
	}

	function index()
	{
		$data['libur'] =$this->M_hari_libur->load_data();
		$this->load->view('admin/list_hari_libur', $data);
	}

	function tambah()
	{
		$data['jenis_hari_libur'] = $this->M_hari_libur->load_jenis_libur();
		$this->load->view('admin/tambah_hari_libur', $data);
	}

	function simpan()
	{
		$tahun = $this->input->post('tahun');
		$keterangan = $this->input->post('keterangan');
		$jenis_libur = $this->input->post('jenis_libur');
		$tanggal = $this->input->post('tanggal');
		$date = date("Y-m-d H:i:s");
		$userid = $this->session->userdata('userid');

		$data =array(
					'tahun' => $tahun,
					'keterangan' => $keterangan,
					'jenis_libur' => $jenis_libur,
					'tanggal' => $tanggal,
					'created_date' => $date,
					'created_by' => $userid
				);

		$simpan = $this->M_hari_libur->insert('hrd_config_libur', $data);
		if($simpan)
		{
			$this->session->set_flashdata('pesan1', 'Data Hari Libur Berhasil Ditambahkan');
			redirect(base_url().'hari_libur/tambah');
		}
		else
		{
			$this->session->set_flashdata('pesan2', 'Data Hari Libur Gagal Ditambahkan');
			redirect(base_url().'hari_libur/tambah');	
		}
	}

	function edit($id_libur)
	{
		$cari = $this->M_hari_libur->cari_data($id_libur);
		$jml = count($cari);
		if($jml > 0)
		{
			foreach($cari as $row)
			{
				$id_libur = $row['id_libur'];
				$tahun = $row['tahun'];
				$keterangan = $row['keterangan'];
				$jenis_libur = $row['jenis_libur'];
				$tanggal = $row['tanggal'];
			}

			$data['jenis_hari_libur'] = $this->M_hari_libur->load_jenis_libur();
			$data['load_data'] = array(
					'id_libur' => $id_libur,
					'tahun' => $tahun,
					'keterangan' => $keterangan,
					'jenis_libur' => $jenis_libur,
					'tanggal' => $tanggal
				);
			$this->load->view('admin/detail_hari_libur', $data);
		}
		else
		{
			$this->session->set_flashdata('pesan3', 'Data Hari Libur Tidak Ditemukan');
			redirect(base_url().'hari_libur');
		}
	}

	function update()
	{
		$id_libur = $this->input->post('id_libur');
		$tahun = $this->input->post('tahun');
		$keterangan = $this->input->post('keterangan');
		$jenis_libur = $this->input->post('jenis_libur');
		$tanggal = $this->input->post('tanggal');
		$date = date("Y-m-d H:i:s");
		$userid = $this->session->userdata('userid');

		$where = array('id_libur' => $id_libur);
		$data = array(
				'tahun' => $tahun,
				'keterangan' => $keterangan,
				'jenis_libur' => $jenis_libur,
				'tanggal' => $tanggal,
				'last_update' => $date,
				'update_by' => $userid
			);

		$update = $this->M_hari_libur->update_data('hrd_config_libur', $data, $where);
		if($update)
		{
			$this->session->set_flashdata('pesan4', 'Data Hari Libur Berhasil Diperbaharui');
			redirect(base_url().'hari_libur');
		}
		else
		{
			$this->session->set_flashdata('pesan5', 'Data Hari Libur Gagal Diperbaharui');
			redirect(base_url().'hari_libur');
		}
	}

	function hapus()
	{
		$id_libur = $this->input->post('id_libur');
		$where = array('id_libur' => $id_libur);
		$hapus = $this->M_hari_libur->delete('hrd_config_libur', $where);
	}
}