<?php

class Recipe extends CI_Model {

  public function __construct()
  {
    parent:: __construct();
    $this->load->database();
  }

  public function add_recipe($recipename, $description, $ingredients, $steps)
  {
    $sql = "INSERT INTO recipes (recipename, description, ingredients, steps) 
            VALUES (
              ".$this->db->escape($recipename).", 
              ".$this->db->escape($description).", 
              ".$this->db->escape($ingredients).", 
              ".$this->db->escape($steps)."
            )";

    $query = $this->db->query($sql);
  }

  public function get_recipe($recipeid) {
    $sql = "SELECT * 
            FROM recipes 
            WHERE recipeid=".$this->db->escape($recipeid);

    $query = $this->db->query($sql);
    $row = $query->row();

    return $row;
  }

}