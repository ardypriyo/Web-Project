<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Periode_absen extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login') == '')
		{
			redirect(base_url().'login');
		}
		$this->load->model('M_periode_absen');
	}

	function index()
	{
		$data['periode'] = $this->M_periode_absen->load_data();
		$this->load->view('admin/daftar_periode_absen', $data);
	}

	function tambah()
	{
		$this->load->view('admin/tambah_periode_absen');
	}

	function simpan()
	{
		$keterangan = $this->input->post('keterangan');
		$tgl_mulai = $this->input->post('tgl_mulai');
		$tgl_selesai = $this->input->post('tgl_selesai');
		$status = $this->input->post('status');
		$userid = $this->session->userdata('userid');
		$tanggal = date("Y-m-d H:i:s");

		if($tgl_selesai < $tgl_mulai)
		{
			$this->session->set_flashdata('pesan7','Tanggal Selesai Harus Lebih Besar Dari Tanggal Mulai');
			redirect(base_url().'periode_absen');
		}

		$cek_data = $this->M_periode_absen->cek_data($tgl_mulai, $tgl_selesai);
		$jml = count($cek_data);
		if($jml > 0)
		{
			$this->session->set_flashdata('pesan1','Periode '.date("d/M/Y", strtotime($tgl_mulai)).' sampai dengan '.date("d/M/Y", strtotime($tgl_selesai)).' Sudah Ada');
			redirect(base_url().'periode_absen');
		}
		else
		{
			$data = array(
				'keterangan' => $keterangan,
				'tgl_mulai' => $tgl_mulai,
				'tgl_selesai' => $tgl_selesai,
				'status' => $status,
				'created_date' =>$tanggal,
				'created_by' => $userid
			);

			$simpan = $this->M_periode_absen->insert('hrd_config_periode_absen', $data);
			if($simpan)
			{
				$this->session->set_flashdata('pesan2','Periode Baru Berhasil Dibuat');
				redirect(base_url().'periode_absen');
			}
			else
			{
				$this->session->set_flashdata('pesan3','Periode Baru Gagal Dibuat');
				redirect(base_url().'periode_absen');
			}
		}
	}

	function edit($id)
	{
		$cari = $this->M_periode_absen->cari_periode($id);
		$jml = count($cari);
		if($jml > 0)
		{
			foreach($cari as $row)
			{
				$id = $row['id'];
				$keterangan = $row['keterangan'];
				$tgl_mulai = $row['tgl_mulai'];
				$tgl_selesai = $row['tgl_selesai'];
				$status = $row['status'];
			}
			$data = array(
					'id' => $id,
					'keterangan' => $keterangan,
					'tgl_mulai' => $tgl_mulai,
					'tgl_selesai' =>$tgl_selesai,
					'status' => $status
				);
			$this->load->view('admin/detail_periode_absen', $data);
		}
		else
		{
			$this->session->set_flashdata('pesan4', 'Data Periode Tidak Ditemukan');
			redirect(base_url().'periode_absen');
		}
	}

	function update()
	{
		$id = $this->input->post('id');
		$keterangan = $this->input->post('keterangan');
		$tgl_mulai = $this->input->post('tgl_mulai');
		$tgl_selesai = $this->input->post('tgl_selesai');
		$status = $this->input->post('status');
		$userid = $this->session->userdata('userid');
		$tanggal = date("Y-m-d H:i:s");

		$data =array(
				'keterangan' => $keterangan,
				'tgl_mulai' => $tgl_mulai,
				'tgl_selesai' => $tgl_selesai,
				'status' => $status,
				'last_update' => $tanggal,
				'update_by' => $userid
			);

		$where = array('id' => $id);
		$update = $this->M_periode_absen->update('hrd_config_periode_absen', $data, $where);
		if($update)
		{
			$this->session->set_flashdata('pesan5', 'Data Periode Berhasil Diperbaharui');
			redirect(base_url().'periode_absen');
		}
		else
		{
			$this->session->set_flashdata('pesan6', 'Data Periode Gagal Diperbaharui');
			redirect(base_url().'periode_absen');
		}
	}

	function hapus()
	{
		$id = $this->input->post('id');
		$where = array('id' => $id);
		$hapus = $this->M_periode_absen->delete('hrd_config_periode_absen', $where);
	}
}