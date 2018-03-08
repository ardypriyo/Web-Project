<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class User extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_user');
			if ($this->session->userdata('login') !== 'login')
            {
                redirect(base_url().'Admin');
            }
		}

		function index()
		{
			$this->load->database();
			$query = $this->db->query("SELECT * FROM m_admin WHERE status='1'");
			$config['base_url'] = base_url().'User/index/';
			$config['total_rows'] = $query->num_rows();
			//pagination settings
			$config['per_page'] = "20";
			$config["uri_segment"] =3;
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
			$from = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			// get stock list
			$halaman['data'] = $this->M_user->dataUSer($config["per_page"], $from, NULL);
			$halaman['pages'] = $this->pagination->create_links();
			$this->load->view('list_user', $halaman);
		}

		function tambah()
		{
			$this->load->view('add_user');
		}

		function simpan()
		{
			$nama = $this->input->post('nama');
			$password = base64_encode($this->input->post('password'));
			$email = $this->input->post('email');
			$status = $this->input->post('status');
			$level = $this->input->post('level');
			$tanggal = date("Y-m-d H:i:s");

			$cari_user=$this->M_user->cek_email($email);
			$jumlah = count($cari_user);
			if($jumlah > 0)
			{
				$this->session->set_flashdata('pesan1', 'Email '.$email.' sudah digunakan, silahkan gunakan alamat email lain');
				redirect(base_url().'user/tambah', 'refresh');
			}
			else
			{
				$data = array(
						'email' => $email,
						'password' => $password,
						'nama' => $nama,
						'level' => $level,
						'status' => $status,
						'created_date' => $tanggal
					);

				$simpan = $this->M_user->insert('m_admin', $data);
				if($simpan)
				{
					$this->session->set_flashdata('pesan2', 'User dengan email '.$email.' berhasil ditambahkan kedalam database');
					redirect(base_url().'user/tambah', 'refresh');
				}
				else
				{
					$this->session->set_flashdata('pesan3', 'User dengan email '.$email.' gagal ditambahkan kedalam database');
					redirect(base_url().'user/tambah', 'refresh');
				}
			}
		}

		function detail($userid)
		{
			$cari = $this->M_user->cari_user($userid);
			$jumlah = count($cari);
			if($jumlah > 0)
			{
				foreach ($cari as $user)
				{
					$userid = $user['userid'];
					$email = $user['email'];
					$password = $user['password'];
					$nama = $user['nama'];
					$level = $user['level'];
					$status = $user['status'];
				}

				$data = array(
						'userid' => $userid,
						'email' => $email,
						'nama' => $nama,
						'password' => base64_decode($password),
						'level' => $level,
						'status' => $status
					);

				$this->load->view('detail_user', $data);
			}
			else
			{
				$this->session->set_flashdata('error1', 'User Tidak Ditemukan');
				redirect(basse_url().'user', 'refresh');
			}
		}

		function edit($userid)
		{
			$cari = $this->M_user->cari_user($userid);
			$jumlah = count($cari);
			if($jumlah > 0)
			{
				foreach ($cari as $user)
				{
					$userid = $user['userid'];
					$email = $user['email'];
					$password = $user['password'];
					$nama = $user['nama'];
					$level = $user['level'];
					$status = $user['status'];
				}

				$data = array(
						'userid' => $userid,
						'email' => $email,
						'nama' => $nama,
						'password' => base64_decode($password),
						'level' => $level,
						'status' => $status
					);

				$this->load->view('edit_user', $data);
			}
			else
			{
				$this->session->set_flashdata('error1', 'User Tidak Ditemukan');
				redirect(basse_url().'user', 'refresh');
			}	
		}

		function update()
		{
			$nama = $this->input->post('nama');
			$password = base64_encode($this->input->post('password'));
			$email = $this->input->post('email');
			$status = $this->input->post('status');
			$level = $this->input->post('level');
			$tanggal = date("Y-m-d H:i:s");
			$userid = $this->input->post('userid');

			$data = array(
					'nama' => $nama,
					'email' => $email,
					'password' => $password,
					'status' => $status,
					'level' => $level,
					'last_update' => $tanggal,
					'update_by' => $this->session->userdata('userid')
				);

			$where = array('userid' => $userid);
			$update = $this->M_user->update('m_admin', $data, $where);
			if($update)
			{
				$this->session->set_flashdata('success1', 'Data Berhasil Diupdate');
				redirect(base_url().'user', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('error2', 'Data Gagal Diupdate');
				redirect(base_url().'user/detail/'.$userid, 'refresh');
			}
		}

		function hapus()
		{
			$userid = $this->input->post('userid');
			//echo $id_artikel;
			$where = array('userid' => $userid);
			$data = array('status' => '3');
			$update = $this->M_user->update('m_admin', $data, $where);
			if($update)
			{
				$this->session->set_flashdata('success2', 'Data Berhasil Dihapus');
				redirect(base_url().'user', 'refresh');
			}
			else
			{
				$this->session->set_flashdata('error3', 'Data Gagal Dihapus');
				redirect(base_url().'user', 'refresh');
			}
		}
	}
?>