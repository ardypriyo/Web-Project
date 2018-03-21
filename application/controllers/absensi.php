<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Absensi extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login') == '')
		{
			redirect(base_url().'login');
		}
		$this->load->model('M_absensi');
	}

	function index()
	{
		$data['absensi'] = $this->M_absensi->load_data();
		$this->load->view('admin/absensi', $data);
	}

	function tambah()
	{
		$this->load->view('admin/tambah_absensi');
	}

	function simpan()
	{
		$kode_absensi = $this->input->post('kode_absensi');
		$keterangan = $this->input->post('keterangan');
		$tipe = $this->input->post('tipe');
		$status = $this->input->post('status');
		$date = date("Y-m-d H:i:s");
		$userid = $this->session->userdata('userid');

		$cek_kode = $this->M_absensi->cek_kode_absen($kode_absensi);
		$jml = count($cek_kode);
		if($jml > 0)
		{
			$this->session->set_flashdata('pesan1', 'kode absensi sudah ada, silahkan gunakan kode lain');
			redirect(base_url().'absensi/tambah');
		}
		else
		{
			$data = array(
					'kode_absen' => $kode_absensi,
					'keterangan' => $keterangan,
					'tipe' => $tipe,
					'status' => $status,
					'created_date' => $date,
					'created_by' => $userid
				);

			$simpan = $this->M_absensi->insert('hrd_config_absensi', $data);
			if($simpan)
			{
				$this->session->set_flashdata('pesan2', 'data baru berhasil ditambahkan');
				redirect(base_url().'absensi/tambah');
			}
			else
			{
				$this->session->set_flashdata('pesan3', 'gagal input data');
				redirect(base_url().'absensi/tambah');
			}
		}
	}

	function edit($id)
	{
		$cari = $this->M_absensi->cari_data($id);
		$jml = count($cari);
		if($jml > 0)
		{
			foreach ($cari as $row)
			{
				$id = $row['id'];
				$kode_absen = $row['kode_absen'];
				$keterangan = $row['keterangan'];
				$tipe = $row['tipe'];
				$status = $row['status'];
			}

			$data = array(
					'id' => $id,
					'kode_absen' => $kode_absen,
					'keterangan' => $keterangan,
					'tipe' => $tipe,
					'status' => $status
				);

			$this->load->view('admin/edit_absensi', $data);
		}
		else
		{
			$this->session->set_flashdata('pesan4', 'Data tidak ditemukan');
			redirect(base_url().'absensi');
		}
	}
	function rubah_data()
	{
		$id = $this->input->post('id');
		$kode_absensi = $this->input->post('kode_absensi');
		$keterangan = $this->input->post('keterangan');
		$tipe = $this->input->post('tipe');
		$status = $this->input->post('status');
		$date = date("Y-m-d H:i:s");
		$userid = $this->session->userdata('userid');
		$data = array(
				'kode_absen' => $kode_absensi,
				'keterangan' => $keterangan,
				'tipe' => $tipe,
				'status' => $status,
				'last_update' => $date,
				'update_by' => $userid
			);
		$where = array('id' => $id);
		$update = $this->M_absensi->update('hrd_config_absensi', $data, $where);
		if($update)
		{
			$this->session->set_flashdata('pesan5', 'Data berhasil diperbaharui');
			redirect(base_url().'absensi');
		}
		else
		{
			$this->session->set_flashdata('pesan6', 'Data gagal diperbaharui');
			redirect(base_url().'absensi/edit/'.$id);
		}
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$where = array('id' => $id);
		$hapus = $this->M_absensi->delete('hrd_config_absensi', $where);
		if($hapus)
		{
			$this->session->set_flashdata('pesan7', 'Data berhasil hapus');
			redirect(base_url().'absensi');
		}
		else
		{
			$this->session->set_flashdata('pesan8', 'Data gagal dihapus');
			redirect(base_url().'absensi');
		}
	}
}