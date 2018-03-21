<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class M_shift extends CI_Model
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

	function load_data()
	{
		return $this->db->query("SELECT * FROM hrd_config_shift")->result_array();
	}

	function cek_data($kode_shift)
	{
		return $this->db->query("SELECT * FROM hrd_config_shift WHERE kode_shift ='$kode_shift'")->result_array();
	}

	function get($id_shift)
	{
		return $this->db->query("SELECT * FROM hrd_config_shift WHERE id_shift = '$id_shift'")->result_array();
	}
}