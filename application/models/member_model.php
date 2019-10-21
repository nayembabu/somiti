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

class Member_model extends CI_model
{
	function __construct()	{
		Parent::__construct();
		$this->load->database();
	}

	function getAllMember() {
		$sql = $this->db->get('member_info');
		return $sql->result();
	}
}