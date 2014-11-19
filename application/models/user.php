<?php

class User extends CI_Model {

  public function __construct()
  {
    parent::__construct();
		$this->load->database();
  }

  public function add_user($name, $email, $password)
  {
		$query = $this->db->query("INSERT INTO user (name, email, password) VALUES (".$this->db->escape($name).", ".$this->db->escape($email).", ".$this->db->escape($password).")");
  }

  public function check_user_exist($email) {
		$query = $this->db->query("SELECT * FROM user WHERE email=".$this->db->escape($email));

		return $query->num_rows() ? true : false;
  }

  public function check_password($email, $password) {
		$query = $this->db->query("SELECT * FROM user WHERE email=".$this->db->escape($email)." AND password=".$this->db->escape($password));

		return $query->num_rows() ? true : false;
  }

  public function get_user($email) {
		$query = $this->db->query("SELECT * FROM user WHERE email=".$this->db->escape($email));
		$row = $query->row();

		return $row;
  }

}