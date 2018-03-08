<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}

	function index()
	{
		$cari_total_user = $this->M_login->cari_total_user();
		$jml = count($cari_total_user);
		if($jml > 0)
		{
			$this->load->view('login');
		}
		else
		{
			$this->load->view('admin_register');
		}
	}

	function admin_register()
	{
		$username = $this->input->post('username');
		$password = base64_encode($this->input->post('password'));
		$full_name = $this->input->post('full_name');
		$tanggal = date("Y-m-d H:i:s");

		$data = array(
				'user_name' => $username,
				'user_password' => $password,
				'full_name' => $full_name,
				'user_role' => '0',
				'status' => '1',
				'deleted' => '0',
				'created_date' => $tanggal
			);

		$simpan = $this->M_login->insert('hrd_user', $data);
		if($simpan)
		{
			redirect(base_url().'Login', 'refresh');
		}
		else
		{
			redirect(base_url().'Login/admin_register', 'refresh');	
		}
	}

	function cek_login()
	{
		$username = $this->input->post('username');
		$password = base64_encode($this->input->post('password'));
		$tanggal = date("Y-m-d H:i:s");

		$cari_user = $this->M_login->cari_user($username, $password);
		$jml = count($cari_user);
		if($jml > 0)
		{
			foreach($cari_user as $user)
			{
				$userid = $user['user_id'];
				$username = $user['user_name'];
				$user_role = $user['user_role'];
				$status = $user['status'];
				$full_name = $user['full_name'];
			}

			$dlogin = array(
					'userid' => $userid,
					'username' => $username,
					'user_role' => $user_role,
					'status' => $status,
					'full_name' => $full_name,
					'login'=> 'login'
				);

			if($status == 0)
			{
				$this->session->set_flashdata('pesan2', 'Akun Anda Nonakit, Silahkan Hubungi Sistem Administrator');
				redirect(base_url().'login');
			}
			else
			{
				$data = array('last_login' => $tanggal);
				$where = array('user_id' => $userid);
				$update = $this->M_login->update('hrd_user', $data, $where);
				if($update)
				{
					$this->session->set_userdata($dlogin);
					if($user_role == 0)
					{
						redirect(base_url().'admin', 'refresh');
					}
					else
					{
						redirect(base_url().'user', 'refresh');	
					}
				}
				else
				{
					$this->session->set_flashdata('pesan3', 'Error System, Silahkan Ulangi Lagi');
					redirect(base_url().'login');
				}
			}
		}
		else
		{
			$this->session->set_flashdata('pesan1', 'User Tidak Ditemukan');
			redirect(base_url().'login', 'refresh');
		}
	}

	function lupa_password()
	{
		$email = $this->input->post("email");
		$cari_email = $this->M_login->cek_email($email);
		$jml = count($cari_email);
		if($jml > 0)
		{
			
		}
		else
		{
			$this->session->set_flashdata('pesan4', 'Email anda tidak terdaftar');
			redirect(base_url().'login');
		}
	}

	function ganti_password($userid)
	{
		
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url().'login','refresh');
	}
}