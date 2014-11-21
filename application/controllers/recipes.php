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
		$userid = $this->session->userdata('userid');
		$recipes = $this->recipe->get_user_recipes($userid);
		$data['recipes'] = $recipes;
		$this->load->view("recipes/my_recipes", $data);
	}

	public function create_recipe($id) 
	{
    switch($id) {
			case 1:
				$data = array(
				    'recipename' => $this->session->userdata('recipename'),
				    'description' => $this->session->userdata('description'),
		 		    'recipeimg' => $this->session->userdata('recipeimg'),
				);
				$this->load->view("recipes/create_recipe_name", $data);
				break;
			case 2:
				if (!empty($this->input->post('recipename'))) {
					$recipename = $this->input->post('recipename');
					$description = $this->input->post('description');
				    $this->session->set_userdata('recipename', $recipename);
		    		$this->session->set_userdata('description', $description);
				}	
				$data = array(
				    'recipename' => $this->session->userdata('recipename'),
				    'description' => $this->session->userdata('description'),
				    'recipeimg' => $this->session->userdata('recipeimg'),
		 		    'ingredients' => $this->session->userdata('ingredients'),
		    );
				$this->load->view("recipes/create_recipe_ingredients", $data);
				break;
			case 3:
				if (!empty($this->input->post('ingredients'))) {
					$ingredients = $this->input->post('ingredients');
			    	$this->session->set_userdata('ingredients', $ingredients);
				}
				$data = array(
			    'recipename' => $this->session->userdata('recipename'),
			    'description' => $this->session->userdata('description'),
			    'recipeimg' => $this->session->userdata('recipeimg'),
	 		    'step1' => $this->session->userdata('step1'),
		    );
				$this->load->view("recipes/create_recipe_steps", $data);
				break;
			case "preview":
				if (!empty($this->input->post('step1'))) {
					$step1 = $this->input->post('step1');
			    	$this->session->set_userdata('step1', $step1);
					$data = array(
					    'recipename' => $this->session->userdata('recipename'),
					    'description' => $this->session->userdata('description'),
	    			    'recipeimg' => $this->session->userdata('recipeimg'),
			 		    'ingredients' => nl2br($this->session->userdata('ingredients'), false),
			 		    'steps' => $this->session->userdata('step1'),
				    );
				}
				$this->load->view("recipes/create_recipe_preview", $data);
				break;
			case "publish":
				//get session data
				$userid = $this->session->userdata('userid');
			    $recipename = $this->session->userdata('recipename');
			    $description = $this->session->userdata('description');
	 		    $ingredients = nl2br($this->session->userdata('ingredients'), false);
	 		    $steps = $this->session->userdata('step1');
	 		    $recipeimg = $this->session->userdata('recipeimg') . '.jpg';

	 		    //add recipe
			    $this->recipe->add_recipe($userid, $recipename, $description, $ingredients, $steps, $recipeimg);
	
				//unset recipes session
				$create_recipes_array = array(
					'recipename' => '', 
					'description' => '',
					'ingredients' => '', 
					'steps' => '',
					'recipeimg' => '',
				);
				$this->session->unset_userdata($create_recipes_array);

				redirect("recipes");
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
	     'recipeimg' => $recipe->recipeimg,
	     'steps' => $recipe->steps,
	     'comments' => $comments,

	    );
		$this->load->view("recipes/view_recipe", $data);
	}

	public function store_recipeimg($recipeimg) {
		$this->session->set_userdata('recipeimg', $recipeimg);
	}

}

?>