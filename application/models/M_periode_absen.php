<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class M_periode_absen extends CI_Model
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
		return $this->db->query("SELECT * FROM hrd_config_periode_absen ORDER BY id ASC")->result_array();
	}

	function cek_data($tgl_mulai, $tgl_selesai)
	{
		return $this->db->query("SELECT * FROM hrd_config_periode_absen WHERE tgl_mulai = '$tgl_mulai' AND tgl_selesai = '$tgl_selesai'")->result_array();
	}

	function cari_periode($id)
	{
		return $this->db->query("SELECT * FROM hrd_config_periode_absen WHERE id = '$id'")->result_array();
	}
}