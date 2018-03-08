<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class M_login extends CI_Model
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

	function cari_total_user()
	{
		return $this->db->query("SELECT * FROM  hrd_user")->result_array();
	}

	function cari_user($username, $password)
	{
		return $this->db->query("SELECT * FROM hrd_user WHERE user_name = '$username' AND user_password = '$password'")->result_array();
	}
}