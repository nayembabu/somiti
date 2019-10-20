<?php 

/*
 *
 * 
 */

class Settings_model extends CI_model
{
	
	function __construct()	{
		Parent::__construct();
		$this->load->database();
	}

	function getSysInfo() {
		$sql = $this->db->get('settings');
		return $sql->row();
	}

	function getuserinfo() {

	}
}