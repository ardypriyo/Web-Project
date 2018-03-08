<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class Tags extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_tags');
		}

		function index()
		{
			$this->load->database();
			$query = $this->db->query("SELECT * FROM tags");
			$config['base_url'] = base_url().'tags/index/';
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
			$halaman['data'] = $this->M_tags->dataUSer($config["per_page"], $from, NULL);
			$halaman['pages'] = $this->pagination->create_links();
			$this->load->view('list_tags', $halaman);
		}

		function tambah()
		{
			$this->load->view('add_tags');
		}

		function simpan()
		{
			$tags = $this->input->post('tags');
			$slug = $this->input->post('slug');
			$deskripsi = $this->input->post('deskripsi');
			$tanggal = date("Y-m-d H:i:s");

			$cari_tags = $this->M_tags->cari($tags);
			$jml = count($cari_tags);
			if($jml > 0)
			{
				redirect(base_url().'tags/tambah', 'refresh');
			}
			else
			{
				$data = array(
					'tags' => $tags,
					'slug' => $slug,
					'deskripsi' => $deskripsi
				);

				$simpan = $this->M_tags->insert('tags', $data);
				if($simpan)
				{
					redirect(base_url().'tags', 'refresh');
				}
				else
				{
					redirect(base_url().'tags/tambah');
				}
			}
		}

		function edit($id_tags)
		{
			$cari = $this->M_tags->cari_by_id($id_tags);
			$jml = count($cari);
			if($jml > 0)
			{
				foreach($cari as $cari)
				{
					$id_tags = $cari['id_tags'];
					$tags = $cari['tags'];
					$deskripsi = $cari['deskripsi'];
				}

				$data = array(
					'id_tags' => $id_tags,
					'tags' => $tags, 
					'deskripsi' => $deskripsi
				);

				$this->load->view('edit_tags', $data);
			}
			else
			{
				redirect(base_url().'tags');
			}
		}

		function update()
		{
			$id_tags = $this->input->post('id_tags');
			$tags = $this->input->post('tags');
			$slug = $this->input->post('slug');
			$deskripsi = $this->input->post('deskripsi');

			$data = array('tags' => $tags, 'deskripsi' => $deskripsi);
			$where = array('id_tags' => $id_tags);

			$simpan = $this->M_tags->update('tags', $data, $where);
			if($simpan)
			{
				redirect(base_url().'tags');
			}
			else
			{
				redirect(base_url().'tags/edit/'.$id_tags);
			}
		}

		function detail($id_tags)
		{
			$this->load->database();
			$query = $this->db->query("SELECT * FROM artikel_tags WHERE id_tags='$id_tags'");
			$config['base_url'] = base_url().'tags/index/';
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
			$halaman['data'] = $this->M_tags->dataArtikel($id_tags, $config["per_page"], $from, NULL);
			$halaman['pages'] = $this->pagination->create_links();
			$this->load->view('list_artikel_by_tags', $halaman);
		}

		function cari()
		{
			
		}
	}
?>