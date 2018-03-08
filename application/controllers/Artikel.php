<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class Artikel extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_artikel');
			if ($this->session->userdata('login') !== 'login')
            {
                redirect(base_url().'Admin');
            }
		}

		function index()
		{
			$this->load->database();
			$query = $this->db->query("SELECT * FROM artikel WHERE status in ('0','1','2')");
			$config['base_url'] = base_url().'artikel/index/';
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
			$halaman['data'] = $this->M_artikel->dataArtikel($config["per_page"], $from, NULL);
			$halaman['pages'] = $this->pagination->create_links();
			$this->load->view('list_artikel', $halaman);
		}

		function tambah()
		{
			$data['kategori'] = $this->M_artikel->cari_kategori();
			$this->load->view('add_artikel', $data);
		}

		function simpan()
		{
			$judul = $this->input->post('judul');
			$isi = $this->input->post('isi_artikel');
			$kategori = $this->input->post('kategori');
			$status = $this->input->post('status');
			$tanggal = date("Y-m-d H:i:s");
			$userid = $this->session->userdata('userid');
			$data_tags = array('tags' => $_POST['tags']);
			$hasil = serialize($data_tags);

			$data = array(
						'author' => $userid,
						'created_date' => $tanggal,
						'status' => $status,
						'judul' => $judul,
						'isi' => $isi,
						'kategori' => $kategori,
						'tags' => $hasil
					);
			$simpan = $this->M_artikel->insert('artikel', $data);
			if($simpan)
			{
				redirect(base_url().'artikel', 'refresh');
			}
			else
			{
				redirect(base_url().'artikel/tambah');
			}
		}
	}
?>