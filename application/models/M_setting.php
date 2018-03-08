<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class M_setting extends CI_Model
	{
		
		function cari()
		{
			return $this->db->query("SELECT * FROM web_setting")->result_array();
		}

		function update($table, $data)
		{	
			$res = $this->db->update($table, $data);
			return $res;
		}
	}
?>