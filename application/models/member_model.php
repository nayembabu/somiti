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

	function insert_new_member($data) {
		$this->db->insert('member_info', $data);
	}

	function get_dist_byDiv($div_id) {
		$this->db->where('division_id', $div_id);
		$sql = $this->db->get('districts');
		return $sql->result();
	}

	function get_upazilla_byDist($dist_id) {
		$this->db->where('district_id', $dist_id);
		$sql = $this->db->get('upazilas');
		return $sql->result();
	}

	function delete_m($id) {
		$this->db->where('mbr_iid', $id);
		$this->db->delete('member_info');
	}
}