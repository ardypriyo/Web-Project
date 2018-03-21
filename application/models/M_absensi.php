<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class M_absensi extends CI_Model
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
		return $this->db->query("SELECT * FROM hrd_config_absensi")->result_array();
	}

	function cek_kode_absen($kode_absen)
	{
		return $this->db->query("SELECT * FROM hrd_config_absensi WHERE kode_absen = '$kode_absen'")->result_array();
	}

	function cari_data($id)
	{
		return $this->db->query("SELECT * FROM hrd_config_absensi WHERE id ='$id'")->result_array();
	}
}