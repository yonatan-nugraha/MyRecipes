<?php

class User extends CI_Model {

  public function __construct()
  {
    parent:: __construct();
		$this->load->database();
  }

  public function add_user($name, $email, $password)
  {
    $sql = "INSERT INTO users (name, email, password) 
            VALUES (
              ".$this->db->escape($name).", 
              ".$this->db->escape($email).", 
              ".$this->db->escape($password)."
            )";

		$query = $this->db->query($sql);
  }

  public function check_user_exist($email) {
    $sql = "SELECT * 
            FROM users 
            WHERE email=".$this->db->escape($email);

		$query = $this->db->query($sql);

		return $query->num_rows() ? true : false;
  }

  public function check_password($email, $password) {
    $sql = "SELECT * 
            FROM users 
            WHERE email=".$this->db->escape($email)." AND password=".$this->db->escape($password);

		$query = $this->db->query($sql);

		return $query->num_rows() ? true : false;
  }

  public function get_user($email) {
    $sql = "SELECT * 
            FROM users 
            WHERE email=".$this->db->escape($email);

		$query = $this->db->query($sql);
		$row = $query->row();

		return $row;
  }

}