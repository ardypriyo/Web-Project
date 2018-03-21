<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class M_konfigurasi extends CI_Model
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

	function load_data()
	{
		return $this->db->query("SELECT * FROM hrd_parameter")->result_array();
	}
}