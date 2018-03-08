<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class M_login extends CI_Model
	{
		function cek_cookie($cookie)
		{
			return $this->db->query("SELECT * FROM m_admin WHERE 	cookie = '$cookie'")->result_array();
		}

		function update($table, $data, $where)
		{
			$res = $this->db->update($table, $data, $where);
				return $res;
		}

		function cek_user($email)
		{
			return $this->db->query("SELECT * FROM m_admin WHERE email = '$email'")->result_array();
		}

		function cek_data($email, $password)
		{
			return $this->db->query("SELECT * FROM m_admin WHERE email ='$email' AND password = '$password'")->result_array();
		}

		function cek_setting()
		{
			return $this->db->query("SELECT * FROM setting")->result_array();
		}
	}
?>