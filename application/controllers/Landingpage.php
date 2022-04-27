<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landingpage extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');
    }
	public function index()
	{
		$data['pembicara'] = $this->M_data->pembicara();
        $this->load->helper('url');
		$this->load->view('template/header');
		$this->load->view('landingpage', $data);
		$this->load->view('template/footer');
	}
}
