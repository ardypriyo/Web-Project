<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class M_artikel extends CI_Model
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

		function cari_kategori()
		{
			return $this->db->query("SELECT * FROM kategori WHERE status ='1' ORDER BY nama_kategori ASC")->result_array();
		}

		function dataArtikel($limit, $start, $st = NULL)
		{
			if ($st == "NIL") $st = "";
			$sql = "SELECT * FROM artikel WHERE status IN ('0','1', '2') ORDER BY created_date ASC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
				//echo $this->db->last_query($query);
		}
	}
?>