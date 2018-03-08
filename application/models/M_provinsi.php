<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class M_provinsi extends CI_Model
{
	
	function insert ($table, $data)
	{
		$res = $this->db->insert($table, $data);
		return $res;
	}
	
	function update($table, $data)
	{	
		$res = $this->db->update($table, $data);
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
		$sql = "SELECT * FROM hrd_master_kota WHERE status != '3' ORDER BY nama_kota ASC LIMIT " . $start . ", " . $limit;
		$query = $this->db->query($sql);
		return $query->result();
	}

	function cari_provinsi()
	{
		return $this->db->query("SELECT * FROM hrd_master_provinsi WHERE status ='1'")->result_array();
	}
}