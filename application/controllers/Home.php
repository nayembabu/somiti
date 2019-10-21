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

class Home extends CI_Controller
{
	
	function __construct()
	{
		Parent::__construct();
		$this->load->library('Ion_auth');
        $this->load->library('session');
        $this->load->model('ion_auth_model');
        $this->load->library('upload');
   /*     $language = $this->db->get('settings')->row()->language;
        $this->lang->load('system_syntax', $language);*/
        $this->load->model('home_model');
        $this->load->model('settings_model');

        
		if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }

	}

	public function index() {
		$log_id = $this->ion_auth->user()->row()->mbr_iid;
		$data['user_info'] = $this->settings_model->getuserinfo($log_id);
		$data['sys_set'] = $this->settings_model->getSysInfo();
		$this->load->view('header', $data);
		$this->load->view('home');
		$this->load->view('footer');
	}
}