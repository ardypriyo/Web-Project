<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Shift extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('login') == '')
		{
			redirect(base_url().'login');
		}
		$this->load->model('M_shift');
	}

	function index()
	{
		$data['shift'] = $this->M_shift->load_data();
		$this->load->view('admin/daftar_shift', $data);
	}

	function tambah()
	{
		$this->load->view('admin/tambah_shift');
	}

	function simpan()
	{
		$kode_shift = $this->input->post('kode_shift');
		$keterangan = $this->input->post('keterangan');
		$jam_mulai= $this->input->post('jam_mulai');
		$jam_selesai = $this->input->post('jam_selesai');
		$status = $this->input->post('status');

		$cek_shift = $this->M_shift->cek_data($kode_shift);
		$jml = count($cek_shift);
		if($jml > 0)
		{
			$this->session->set_flashdata('pesan1', 'Kode Shift Sudah Digunakan');
			redirect(base_url().'shift/tambah', 'refresh');
		}
		else
		{
			if($jam_selesai < $jam_mulai)
			{
				$this->session->set_flashdata('pesan2', 'Jam Selesai Harus Lebih Besar Dari Jam Mulai');
				redirect(base_url().'shift/tambah', 'refresh');
			}
			else
			{
				$data = array(
						'kode_shift' => $kode_shift,
						'keterangan' => $keterangan,
						'jam_mulai' => $jam_mulai,
						'jam_selesai' => $jam_selesai,
						'status' => $status,
						'created_date' => date("y-m-d H:i:s"),
						'created_by' => $this->session->userdata('userid')
					);

				$simpan = $this->M_shift->insert('hrd_config_shift', $data);
				if($simpan)
				{
					$this->session->set_flashdata('pesan3', 'Data Shift Baru Berhasil Ditambahkan');
					redirect(base_url().'shift/tambah', 'refresh');
				}
				else
				{
					$this->session->set_flashdata('pesan4', 'Gagal Menambahkan Data Baru');
					redirect(base_url().'shift/tambah', 'refresh');
				}
			}
		}
	}

	function edit($id_shift)
	{
		$get_data = $this->M_shift->get($id_shift);
		$jml = count($get_data);
		if($jml > 0)
		{
			foreach($get_data as $row)
			{
				$id_shift = $row['id_shift'];
				$kode_shift = $row['kode_shift'];
				$keterangan = $row['keterangan'];
				$jam_mulai = $row['jam_mulai'];
				$jam_selesai = $row['jam_selesai'];
				$status = $row['status'];
			}

			$data = array(
					'id_shift' => $id_shift,
					'kode_shift' => $kode_shift,
					'keterangan' => $keterangan,
					'jam_mulai' => $jam_mulai,
					'jam_selesai' => $jam_selesai,
					'status' => $status
				);

			$this->load->view('admin/edit_shift', $data);
		}
		else
		{
			$this->session->set_flashdata('pesan5', 'Data tidak ditemukan');
			redirect(base_url().'shift', 'refresh');
		}
	}

	function update()
	{
		$id_shift = $this->input->post('id_shift');
		$kode_shift = $this->input->post('kode_shift');
		$keterangan = $this->input->post('keterangan');
		$jam_mulai= $this->input->post('jam_mulai');
		$jam_selesai = $this->input->post('jam_selesai');
		$status = $this->input->post('status');

		$cek_shift = $this->M_shift->cek_data($kode_shift);
		$jml = count($cek_shift);
		if($jml > 0)
		{
			$this->session->set_flashdata('pesan1', 'Kode Shift Sudah Digunakan');
			redirect(base_url().'shift/tambah', 'refresh');
		}
		else
		{
			$data = array(
				'kode_shift' => $kode_shift,
				'keterangan' => $keterangan,
				'jam_mulai' => $jam_mulai,
				'jam_selesai' => $jam_selesai,
				'status' => $status,
				'last_update' => date("Y-m-d H:i:s"),
				'update_by' => $this->session->userdata('userid')
			);

			$where = array('id_shift' => $id_shift);

			$simpan = $this->M_shift->update('hrd_config_shift', $data, $where);
			if($simpan)
			{
				$this->session->set_flashdata('pesan6', 'Data Berhasil Diperbaharui');
				redirect(base_url().'shift', 'refresh');	
			}
			else
			{
				$this->session->set_flashdata('pesan7', 'Data Gagal Diperbaharui');
				redirect(base_url().'shift', 'refresh');
			}
		}
	}

	function hapus()
	{
		$id_shift = $this->input->post('id_shift');
		$where = array ('id_shift' => $id_shift);
		$hapus = $this->M_shift->delete('hrd_config_shift', $where);
		if($hapus)
		{
			$this->session->set_flashdata('pesan8', 'Data berhasil hapus');
			redirect(base_url().'absensi');
		}
		else
		{
			$this->session->set_flashdata('pesan9', 'Data gagal dihapus');
			redirect(base_url().'absensi');
		}
	}
}