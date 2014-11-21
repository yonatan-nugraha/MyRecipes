<?php

class Recipe extends CI_Model {

  public function __construct()
  {
    parent:: __construct();
    $this->load->database();
  }

  public function add_recipe($userid, $recipename, $description, $ingredients, $steps, $recipeimg)
  {
    $sql = "INSERT INTO recipes (userid, recipename, description, ingredients, steps, recipeimg) 
            VALUES (
              ".$this->db->escape($userid).", 
              ".$this->db->escape($recipename).", 
              ".$this->db->escape($description).", 
              ".$this->db->escape($ingredients).", 
              ".$this->db->escape($steps).",
              ".$this->db->escape($recipeimg)."
            )";

    $query = $this->db->query($sql);
  }

  public function get_top_recipes() {
    $sql = "SELECT * 
            FROM recipes
            ORDER BY RAND()
            LIMIT 6";

    $query = $this->db->query($sql);

    return $query->result();
  }

  public function get_user_recipes($userid) {
    $sql = "SELECT * 
            FROM recipes 
            WHERE userid=".$this->db->escape($userid);

    $query = $this->db->query($sql);

    return $query->result();
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