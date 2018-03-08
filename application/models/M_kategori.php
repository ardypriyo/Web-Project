<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class M_kategori extends CI_Model
	{
		function insert ($table, $data)
		{
			$res = $this->db->insert($table, $data);
			return $res;
		}
		
		function update($table, $data, $where)
		{	
			$res = $this->db->update($table, $data, $where);
			return $res;
		}

		function delete($table, $where)
		{
			$res = $this->db->delete($table, $where);
			return $res;
		}

		function dataUSer($limit, $start, $st = NULL)
		{
			if ($st == "NIL") $st = "";
			$sql = "SELECT * FROM kategori WHERE status IN ('0', '1', '2') ORDER BY nama_kategori ASC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
				//echo $this->db->last_query($query);
		}

		function cek_nama_kategori($nama_kategori)
		{
			return $this->db->query("SELECT * FROM kategori WHERE nama_kategori = '$nama_kategori'")->result_array();
		}

		function cari($id_kategori)
		{
			return $this->db->query("SELECT * FROM kategori WHERE id_kategori='$id_kategori'")->result_array();
		}
	}
?>