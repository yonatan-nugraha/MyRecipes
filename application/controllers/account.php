<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends MY_Controller {

	public function __construct() 
	{
		parent:: __construct();
    $this->load->model('User');
		$this->load->library('session');
		$this->load->helper('url');
	}

  public function set_session($email, $name) 
  {
    $this->session->set_userdata('email', $email);
    $this->session->set_userdata('name', $name);

		redirect('/home/index');
  }

  public function check_session() 
  {
    $session_email = $this->session->userdata('email');
    return (!empty($session_email)) ? true : false;
  }

  public function login() 
  {
    if (!$this->check_session()) {
      $this->load->view('account/login');
    }
    else {
		redirect('/home/index');
    }
  }

  public function signin() 
  {
  	$email = $this->input->post('inputEmail');
    $password = $this->input->post('inputPassword');

  	//check if user exists
    if (!$this->User->check_user_exist($email)) {    
      redirect('account/signin_failed');
    }

  	//check if user exists
    if (!$this->User->check_password($email, $password)) {
      redirect('account/signin_failed');
    }

    $user = $this->User->get_user($email);
		
		$this->set_session($user->email, $user->name);

  }

  public function signin_failed() 
  {
    if (!$this->check_session()) {
    	$this->load->view('account/signin_failed');
    }
    else {
			redirect('/home/index');
    }
  }

  public function signup() 
  {
  	$name = $this->input->post('name');
  	$email = $this->input->post('email');
    $password = $this->input->post('password');

  	//check if user exists
    if (!$this->User->check_user_exist($email)) {
			$this->signup_failed();
    }

    //add new user
    try {
    	$this->User->add_user($name, $email, $password);
    	$this->set_session($email, $name);
    } catch (Exception $e) {
      $this->signup_failed();
    }

  }

  public function signup_failed() 
  {
    if (!$this->check_session()) {
      $this->load->view('account/signup_failed');
    }
    else {
      redirect('/home/index');
    }
  }

  public function signout() 
  {
    $this->session->sess_destroy();
		redirect('/home/index');
	}

}

?>