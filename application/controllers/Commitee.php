<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Commitee extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');
    }
	public function index()
	{
		$data['komite'] = $this->M_data->getdata('komite');
		$data['komite2'] = $this->M_data->getdata('komite');
        $this->load->helper('url');
		$this->load->view('template/header');
		$this->load->view('commitee', $data);
		$this->load->view('template/footer');
	}
}