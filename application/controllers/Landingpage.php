<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landingpage extends CI_Controller {

	
	public function index()
	{
        $this->load->helper('url');
		$this->load->view('template/header');
		$this->load->view('landingpage');
		$this->load->view('template/footer');
	}
}
