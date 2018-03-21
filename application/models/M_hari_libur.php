<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class M_hari_libur extends CI_Model
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

	function update_data($table, $data, $where)
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
		return $this->db->query("SELECT * FROM hrd_config_libur AS A LEFT JOIN hrd_config_jenis_libur AS B ON A.jenis_libur = B.id_jenis_libur ORDER BY A.tahun DESC, A.tanggal ASC")->result_array();
	}

	function load_jenis_libur()
	{
		return $this->db->query("SELECT * FROM hrd_config_jenis_libur WHERE status ='1'")->result_array();
	}

	function cari_data($id_libur)
	{
		return $this->db->query("SELECT * FROM hrd_config_libur WHERE id_libur ='$id_libur'")->result_array();
	}
}