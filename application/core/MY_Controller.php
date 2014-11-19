<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
    function __construct()
    {
        parent::__construct();
    }

    function _output($content)
    {
        $this->load->helper(array('form','url','html'));

        $data = array(
         'name' => $this->session->userdata('name'),
         'email' => $this->session->userdata('email'),
         'password' => $this->session->userdata('password')
        );

        $data['str'] = $this->uri->segment(2);
        $this->load->library('session');
        $id=(int)$this->session->userdata('id');
        if($id != '')
        {
            $this->load->model('user');
			 $query =$this->user->retrieve($id);
            $data['f_id'] = $query['id'];
            $data['f_username']= $query['username'];
        }
        else
        {
            $data['f_id'] = '';
            $data['f_username'] ='';
        }
        $data['is_admin'] = $this->session->userdata('is_admin');

        $data['content'] = &$content;
        echo($this->load->view('base', $data, true));
    }
}


