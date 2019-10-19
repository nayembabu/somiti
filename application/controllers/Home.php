<?php

/**
 * 
 */

class Home extends CI_Controller
{
	
	function __construct()
	{
		Parent::__construct();
		
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}
}