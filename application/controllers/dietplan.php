<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class DietPlan extends MY_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->helper('url');		
		$this->load->library('session');
	}

	public function index() {
		$data = array(
	     'name' => $this->session->userdata('name'),
	     'email' => $this->session->userdata('email'),
	    );
		$this->load->view("dietplan/diet_plan", $data);
	}
}