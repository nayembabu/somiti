<?php 

/* Author 					: Nayem Babu 
 * Author Title				: Web Developer
 * Software Name 			: Association Software
 * Author Url 				: https://nayembabu.com
 * Github Peroject Url 		: https://github.com/nayembabu/somiti
 * Github Author Url 		: https://github.com/nayembabu/
 * Github Contributor		: Jashim Uddin
 * Github Contributor Url 	: https://github.com/jashimgit/
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

	function getuserinfo($log_id) {
		$this->db->where('mbr_iid', $log_id);
		$sql = $this->db->get('member_info');
		return $sql->row();
	}

	function getDiv() {
		$sql = $this->db->get('divisions');
		return $sql->result();
	}
}