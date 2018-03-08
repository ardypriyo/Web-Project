<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class M_tags extends CI_Model
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
			$sql = "SELECT * FROM tags ORDER BY tags ASC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
				//echo $this->db->last_query($query);
		}

		function dataArtikel($id_tags, $limit, $start, $st = NULL)
		{
			if ($st == "NIL") $st = "";
			$sql = "SELECT * FROM artikel_tags WHERE id_tags = '$id_tags' ORDER BY judul ASC LIMIT " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
				//echo $this->db->last_query($query);
		}

		function cari ($tags)
		{
			return $this->db->query("SELECT * FROM tags WHERE tags='$tags'")->result_array();
		}

		function cari_by_id($id_tags)
		{
			return $this->db->query("SELECT * FROM tags WHERE id_tags='$id_tags'")->result_array();	
		}
	}
?>