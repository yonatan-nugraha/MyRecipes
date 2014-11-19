<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recipes extends MY_Controller {

	public function __construct() {
		parent:: __construct();
		$this->load->helper('url');		
		$this->load->library('session');
	}

	public function index() {
		$this->load->view("recipes/my_recipes");
	}

	public function create_recipes($id) {

    switch($id) {
			case 1:
				$data = array(
		     'recipename' => $this->session->userdata('recipename'),
		     'description' => $this->session->userdata('description'),
		    );
				$this->load->view("recipes/create_recipes_name", $data);
				break;
			case 2:
				$recipename = $this->input->post('recipename');
				$description = $this->input->post('description');
		    $this->session->set_userdata('recipename', $recipename);
    		$this->session->set_userdata('description', $description);

				$data = array(
		     'recipename' => $this->session->userdata('recipename'),
		     'description' => $this->session->userdata('description'),
 		     'ingredients' => $this->session->userdata('ingredients'),
		    );
				$this->load->view("recipes/create_recipes_ingredients", $data);	
				break;
			case 3:
				$ingredients = $this->input->post('ingredients');
		    $this->session->set_userdata('ingredients', $ingredients);

				$data = array(
		     'recipename' => $this->session->userdata('recipename'),
		     'description' => $this->session->userdata('description'),
 		     'steps' => $this->session->userdata('steps'),
		    );
				$this->load->view("recipes/create_recipes_steps", $data);
				break;
			case "preview":
				$data = array(
		     'recipename' => $this->session->userdata('recipename'),
		     'description' => $this->session->userdata('description'),
 		     'ingredients' => $this->session->userdata('ingredients'),
 		     'steps' => $this->session->userdata('steps'),
		    );
				$this->load->view("recipes/create_recipes_preview");
				break;
		}
	}

	public function view_recipes() {
		$this->load->view("recipes/my_recipes_view");
	}

}

?>