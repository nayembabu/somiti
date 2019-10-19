<?php

/**
 * 
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

        
/*        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login', 'refresh');
        }*/

	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('table');
		$this->load->view('footer');
	}
}