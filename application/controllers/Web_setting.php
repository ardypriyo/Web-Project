<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class Web_setting extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_setting');
			if ($this->session->userdata('login') !== 'login')
            {
                redirect(base_url().'Admin');
            }
		}

		function index()
		{
			$cek_setting = $this->M_setting->cari();
			$jml = count($cek_setting);
			if($jml	> 0)
			{
				foreach($cek_setting as $setting)
				{
					$nama = $setting['nama'];
					$status = $setting['status'];
					$pesan = $setting['pesan'];
					$list = $setting['list'];
					$feed = $setting['feed'];
					$email = $setting['email'];
					$nama_email = $setting['nama_email'];
					$smtp_host = $setting['smtp_host'];
					$smtp_port = $setting['smtp_port'];
					$smtp_user = $setting['smtp_user'];
					$smtp_password =base64_decode($setting['smtp_password']);
				}

				$data = array(
						'nama' => $nama,
						'status' => $status,
						'pesan' => $pesan,
						'list' => $list,
						'feed' => $feed,
						'email' => $email,
						'nama_email' => $nama_email,
						'smtp_host' => $smtp_host,
						'smtp_port' => $smtp_port,
						'smtp_user' => $smtp_user,
						'smtp_password' => $smtp_password
					);

				$this->load->view('web_setting', $data);
			}
			else
			{
				$this->load->view('web_setting');
			}
		}

		function update()
		{
			$nama = $this->input->post('nama');
			$status = $this->input->post('status');
			$pesan = $this->input->post('pesan');
			$list = $this->input->post('list');
			$feed = $this->input->post('feed');
			$email = $this->input->post('email');
			$nama_email = $this->input->post('nama_email');
			$smtp_host = $this->input->post('smtp_host');
			$smtp_port = $this->input->post('smtp_port');
			$smtp_user = $this->input->post('smtp_user');
			$smtp_password =base64_encode($this->input->post('smtp_password'));
			$tanggal = date("Y-m-d H:i:s");
			$userid = $this->session->userdata('userid');

			$data = array(
					'nama' => $nama,
					'status' => $status,
					'pesan' => $pesan,
					'list' => $list,
					'feed' => $feed,
					'email' => $email,
					'nama_email' => $nama_email,
					'smtp_host' => $smtp_host,
					'smtp_port' => $smtp_port,
					'smtp_user' => $smtp_user,
					'smtp_password' => $smtp_password,
					'last_update' => $tanggal,
					'update_by' => $userid
				);

			$update = $this->M_setting->update('web_setting', $data);
			if($update)
			{
				$this->session->set_flashdata('pesan1', 'Konfigurasi berhasil di update');
				redirect(base_url().'web_setting', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('pesan2', 'Konfigurasi gagal di update');
				redirect(base_url().'web_setting', 'refresh');
			}
		}
	}
?>