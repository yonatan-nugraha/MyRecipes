<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->helper('url');		
		$this->load->library('session');
	    $this->load->model('recipe');
	}

	public function index() {
		$recipes = $this->recipe->get_top_recipes();
		$data['recipes'] = $recipes;
		$this->load->view("home/index", $data);
	}

}

?>