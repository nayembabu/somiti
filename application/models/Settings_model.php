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

defined('BASEPATH') or exit('No direct script access allowed');


class Settings_model extends CI_Model
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->database();
    }

    public function getSysInfo()
    {
        $sql = $this->db->get('settings');
        return $sql->row();
    }

    public function getuserinfo($log_id)
    {
        $this->db->where('mbr_iid', $log_id);
        $sql = $this->db->get('member_info');
        return $sql->row();
    }

    public function getDiv()
    {
        $sql = $this->db->get('divisions');
        return $sql->result();
    }
}
