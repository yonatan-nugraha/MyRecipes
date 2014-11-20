<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Recipes extends MY_Controller {

	public function __construct() 
	{
		parent:: __construct();
		$this->load->helper('url');		
		$this->load->library('session');
    $this->load->model('recipe');
    $this->load->model('comment');

	}

	public function index() 
	{
		$this->load->view("recipes/my_recipes");
	}

	public function create_recipe($id) 
	{
    switch($id) {
			case 1:
				$data = array(
		     'recipename' => $this->session->userdata('recipename'),
		     'description' => $this->session->userdata('description'),
		    );
				$this->load->view("recipes/create_recipe_name", $data);
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
				$this->load->view("recipes/create_recipe_ingredients", $data);	
				break;
			case 3:
				$ingredients = $this->input->post('ingredients');
		    $this->session->set_userdata('ingredients', $ingredients);

				$data = array(
		     'recipename' => $this->session->userdata('recipename'),
		     'description' => $this->session->userdata('description'),
 		     'steps' => $this->session->userdata('steps'),
		    );
				$this->load->view("recipes/create_recipe_steps", $data);
				break;
			case "preview":
				$data = array(
		     'recipename' => $this->session->userdata('recipename'),
		     'description' => $this->session->userdata('description'),
 		     'ingredients' => $this->session->userdata('ingredients'),
 		     'steps' => $this->session->userdata('steps'),
		    );
				$this->load->view("recipes/create_recipe_preview", $data);
				break;
			case "publish":
		    $recipename = $this->session->userdata('recipename');
		    $description = $this->session->userdata('description');
 		    $ingredients = $this->session->userdata('ingredients');
 		    $steps = $this->session->userdata('steps');

		    $this->recipe->add_recipe($recipename, $description, $ingredients, $steps);
				redirect("recipes/view_recipe/1");
				break;
		}
	}

	public function view_recipe($recipeid) {
		$recipe = $this->recipe->get_recipe($recipeid);
		$comments = $this->comment->get_comments($recipeid);
		$data = array(
     'recipename' => $recipe->recipename,
     'description' => $recipe->description,
     'ingredients' => $recipe->ingredients,
     'steps' => $recipe->steps,
     'comments' => $comments,
    );
		$this->load->view("recipes/view_recipe", $data);
	}

}

?>