<?php

class Comment extends CI_Model {

  public function __construct()
  {
    parent:: __construct();
    $this->load->database();
  }

  public function add_comment($recipeid, $userid, $comment, $date)
  {
    $sql = "INSERT INTO comments(recipeid, userid, comment, `date`)
            VALUES (
              ".$this->db->escape($recipeid).", 
              ".$this->db->escape($userid).", 
              ".$this->db->escape($comment).", 
              ".$this->db->escape($date)."
            )";

    $query = $this->db->query($sql);
  }

  public function get_comments($recipeid) 
  {
    $sql = "SELECT users.name, comments.comment, comments.date
            FROM users
            INNER JOIN comments
            ON users.userid=comments.userid
            WHERE comments.recipeid=".$recipeid."
            ORDER BY comments.date DESC";
    
    $query = $this->db->query($sql);

    return $query->result();
  }

}