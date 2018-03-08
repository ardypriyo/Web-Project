<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class Kategori extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_kategori');
			if ($this->session->userdata('login') !== 'login')
            {
                redirect(base_url().'Admin');
            }
		}

		function index()
		{
			$this->load->database();
			$query = $this->db->query("SELECT * FROM kategori WHERE status in ('0','1','2')");
			$config['base_url'] = base_url().'kategori/index/';
			$config['total_rows'] = $query->num_rows();
			//pagination settings
			$config['per_page'] = "10";
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
			$halaman['data'] = $this->M_kategori->dataUSer($config["per_page"], $from, NULL);
			$halaman['pages'] = $this->pagination->create_links();
			$this->load->view('kategori', $halaman);
		}

		function simpan()
		{
			$nama_kategori = $this->input->post('nama_kategori');
			$status = $this->input->post('status');
			$deskripsi = $this->input->post('deskripsi');
			$tanggal = date("Y-m-d H:i:s");
			$userid = $this->session->userdata('userid');

			$cek_nama_kategori = $this->M_kategori->cek_nama_kategori($nama_kategori);
			$jml = count($cek_nama_kategori);
			if($jml > 0)
			{
				redirect(base_url().'kategori');
			}
			else
			{
				$data = array(
						'nama_kategori' => $nama_kategori,
						'status' => $status,
						'deskripsi' => $deskripsi,
						'created_date' => $tanggal,
						'created_by' => $userid
					);

				$simpan = $this->M_kategori->insert('kategori', $data);
				if($simpan)
				{
					redirect(base_url().'kategori');		
				}
				else
				{
					redirect(base_url().'kategori');
				}
			}
		}

		function detail($id_kategori)
		{
			$cari = $this->M_kategori->cari($id_kategori);
			$jml = count($cari);
			if($jml > 0)
			{
				foreach($cari as $kategori)
				{
					$nama_kategori = $kategori['nama_kategori'];
					$status = $kategori['status'];
					$deskripsi = $kategori['deskripsi'];
					$id_kategori = $id_kategori;
				}

				$data = array(
							'id_kategori' => $id_kategori,
							'nama_kategori' => $nama_kategori,
							'status' => $status,
							'deskripsi' => $deskripsi
						);
				$this->load->view('detail_kategori', $data);
			}
			else
			{
				redirect(base_url().'kategori','refresh');
			}
		}

		function edit($id_kategori)
		{
			$cari = $this->M_kategori->cari($id_kategori);
			$jml = count($cari);
			if($jml > 0)
			{
				foreach($cari as $kategori)
				{
					$nama_kategori = $kategori['nama_kategori'];
					$status = $kategori['status'];
					$deskripsi = $kategori['deskripsi'];
					$id_kategori = $id_kategori;
				}

				$data = array(
							'id_kategori' => $id_kategori,
							'nama_kategori' => $nama_kategori,
							'status' => $status,
							'deskripsi' => $deskripsi
						);
				$this->load->view('edit_kategori', $data);
			}
			else
			{
				redirect(base_url().'kategori','refresh');
			}
		}

		function update()
		{
			$id_kategori = $this->input->post('id_kategori');
			$nama_kategori = $this->input->post('nama_kategori');
			$status = $this->input->post('status');
			$deskripsi = $this->input->post('deskripsi');
			$tanggal = date("Y-m-d H:i:s");
			$userid = $this->session->userdata('userid');

			$data = array(
						'nama_kategori' => $nama_kategori,
						'status' => $status,
						'deskripsi' => $deskripsi,
						'last_update' => $tanggal,
						'update_by' => $userid
					);

			$where = array('id_kategori' => $id_kategori);
			$update = $this->M_kategori->update('kategori', $data, $where);
			if($update)
			{
				redirect(base_url().'kategori','refresh');
			}
			else
			{
				redirect(base_url().'kategori/edit/'.$id_kategori,'refresh');
			}
		}

		function hapus($id_kategori)
		{
			$data = array('status' => '3');
			$where = array('id_kategori' => $id_kategori);
			$hapus = $this->M_kategori->update('kategori', $data, $where);
			if($hapus)
			{
				redirect(base_url().'kategori');
			}
			else
			{
				redirect(base_url().'kategori');
			}
		}
	}
?>