<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class submission extends CI_Controller {

	
	public function index()
	{
        $this->load->helper('url');
		$this->load->view('template/header');
		$this->load->view('submission');
		$this->load->view('template/footer');
	}
}