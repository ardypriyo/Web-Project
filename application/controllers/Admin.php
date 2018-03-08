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
			$this->load->model("M_login");
			
		}

		function index()
		{
			$tanggal = date("Y-m-d H:i:s");
			//ambil nilai cookie
			$cookie = get_cookie('data_login');
			if($cookie == null)
			{
				//jika cookie kosong kembalikan ke halaman login
				$this->load->view('Login');
			}
			else
			{
				//jika cookie tidak kosong cek key ke dalam database
				$cari_user = $this->M_login->cek_cookie($cookie);
				$jml_data = count($cari_user);

				if($jml_data > 0)
				{
					$cari_setting = $this->M_login->cek_setting();
					foreach($cari_setting as $konfig)
					{
						$nama_website = $konfig['nama'];
						$tagline = $konfig['tagline'];
						$status_website = $konfig['status'];
						$pesan_offline = $konfig['pesan'];
					}
					//jika data ditemukan ambil nilai database berdasarkan key dari cookie
					foreach($cari_user as $user)
					{
						$email = $user['email'];
						$nama = $user['nama'];
						$status = $user['status'];
						$level = $user['level'];
						$login = 'login';
						$created_date = $user['created_date'];
						$last_login =$user['last_login'];
						$image = $user['image'];
						$is_login = $user['is_login'];
						$userid = $user['userid'];
					}

					$dlogin = array(
									'userid' => $userid,
									'email' => $email,
									'nama' => $nama,
									'status' => $status,
									'level' => $level,
									'login' => $login,
									'created_date' => $created_date,
									'last_login' => $last_login,
									'image' => $image,
									'is_login' => $is_login,
									'nama_website' => $nama_website,
									'tagline' => $tagline,
									'status_website' => $status_website,
									'pesan_offline' => $pesan_offline
								);

					//cek status user
					if($status == '0')
					{
						$this->session->set_flashdata('pesan1', 'Maaf User Anda Terkena Suspend, Silahkan Kontak Sistem Administrator Anda');
						$this->load->view('Login', 'refresh');
					}
					else
					{
						$where = array('email' => $email);
						$datalogin = array('last_login' => $tanggal);
						$update_login = $this->M_login->update('m_admin', $datalogin, $where);

						if($update_login)
						{
							$this->session->set_userdata($dlogin);
							redirect (base_url().'Home', 'refresh');
						}
						else
						{
							$this->session->set_flashdata('pesan2', 'Maaf Sistem Gagal Memproses Data Login Anda, Silahkan Coba Lagi');
							$this->load->view('Login', 'refresh');
						}
					}
				}
				else
				{
					$this->session->set_flashdata('pesan2', 'Maaf Sistem Gagal Memproses Data Login Anda, Silahkan Coba Lagi');
					$this->load->view('Login', 'refresh');
				}
			}
		}
		
		function cek_email()
		{
			$email = strtolower(trim($this->input->post('email')));
			$cek_email = $this->M_login->cek_user($email);
			$jml = count($cek_email);
			if($jml > 0)
			{
				echo "Silahkan masukkan password anda";
			}
			else
			{
				echo "Maaf anda belum terdaftar";
			}
		}

		function cek_login()	
		{
			$email = strtolower((trim($this->input->post('email'))));
			$password = base64_encode(strtolower(trim($this->input->post('password'))));
			$remember = $this->input->post('remember');
			$tanggal = date("Y-m-d H:i:s");
			
			$cek = $this->M_login->cek_data($email, $password);
			$jml = count($cek);
			if($jml > 0)
			{
				$cari_setting = $this->M_login->cek_setting();
				foreach($cari_setting as $konfig)
				{
					$nama_website = $konfig['nama_website'];
					$tagline = $konfig['tagline'];
					$status_website = $konfig['status_website'];
					$pesan_offline = $konfig['pesan_offline'];
				}
				foreach($cek as $user)
				{
					$userid = $user['userid'];
					$email = $user['email'];
					$nama = $user['nama'];
					$status = $user['status'];
					$level = $user['level'];
					$login = 'login';
					$created_date = $user['created_date'];
					$last_login = $user['last_login'];
					$image = $user['image'];
					$is_login = $user['is_login'];
				}

				$dlogin = array(
							'userid' => $userid,
							'email' => $email,
							'nama' => $nama,
							'status' => $status,
							'level' => $level,
							'login' => $login,
							'created_date' => $created_date,
							'last_login' => $last_login,
							'image' => $image,
							'is_login' => $is_login,
							'nama_website' => $nama_website,
							'tagline' => $tagline,
							'status_website' => $status_website,
							'pesan_offline' => $pesan_offline
						);

				if($status == "1")
				{
					if($remember == 1)
					{
						$key = random_string('alnum', 20);
						set_cookie('data_login', $key, 3600*24*30);
						$this->session->set_userdata($dlogin);
						$data = array(
								'last_login' => $tanggal,
								'cookie' => $key,
								'is_login' => '1'
							);
						$where = array('email' => $email);
						$update_login=$this->M_login->update('m_admin',$data, $where);
						if ($update_login) 
						{
							redirect(base_url().'Home');
						}
						else
						{
							$this->session->set_flashdata('pesan2', 'Sistem Gagal Memproses Data Login Anda');
							$this->load->view('login');
						}
					}
					else
					{
						$this->session->set_userdata($dlogin);
						$data = array(
								'last_login' => $tanggal,
								'is_login' => '1'
							);
						$where = array('email' => $email);
						$update_login=$this->M_login->update('m_admin',$data, $where);
						if ($update_login) 
						{
							redirect(base_url().'Home');
						}
						else
						{
							$this->session->set_flashdata('pesan2', 'Sistem Gagal Memproses Data Login Anda');
							$this->load->view('login');
						}
					}
				}
				else
				{
					$this->session->set_flashdata('pesan1', 'Maaf User Anda Terkena Suspend, Silahkan Kontak Sistem Administrator Anda');
					$this->load->view('Login', 'refresh');
				}
			}
			else
			{
				$this->session->set_flashdata('pesan3', 'Maaf kombinasi email dan password salah');
				$this->load->view('Login', 'refresh');
			}
		}

		function logout()
		{
			$email = $this->session->userdata('email');
			$data = array(
						'is_login' => '0'
					);
			$where = array('email' => $email);
			$update = $this->M_login->update('m_admin', $data, $where);
			if($update)
			{				
				$this->session->sess_destroy();
				redirect(base_url().'Admin','refresh');
			}
		}
	}
?>