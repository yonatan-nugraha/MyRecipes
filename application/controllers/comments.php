<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comments extends CI_Controller {

	public function __construct() 
	{
		parent:: __construct();
		$this->load->helper('url');		
		$this->load->library('session');
		$this->load->model('comment');
	}

	public function add_comment() 
	{
		$recipeid = $this->input->get('recipeid');
		$userid = $this->session->userdata('userid');
		$comment = $this->input->get('comment');

		date_default_timezone_set('Asia/Hong_Kong'); 
		$date = date("Y-m-d H:i:s");

		$this->comment->add_comment($recipeid, $userid, $comment, $date);
		$this->view_comments($recipeid);
	}

	public function view_comments($recipeid) 
	{
		$comments = $this->comment->get_comments($recipeid);
		$data = array(
     	'comments' => $comments,
    );

		$this->load->view("comments/view_comments", $data);
	}
}