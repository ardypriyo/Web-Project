<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class M_user extends CI_Model
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

		function cek_email($email)
		{
			return $this->db->query("SELECT * FROM m_admin WHERE email='$email'")->result_array();
		}

		function dataUSer($limit, $start, $st = NULL)
		{
			if ($st == "NIL") $st = "";
			$sql = "SELECT * FROM m_admin WHERE status='1' order by nama ASC limit " . $start . ", " . $limit;
			$query = $this->db->query($sql);
			return $query->result();
				//echo $this->db->last_query($query);
		}

		function cari_user($userid)
		{
			return $this->db->query("SELECT * FROM m_admin WHERE userid='$userid'")->result_array();
		}
	}

?>