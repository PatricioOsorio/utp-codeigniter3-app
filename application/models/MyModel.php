<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MyModel extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function getCategories()
  {
    $result = $this->db->get('categoria');

    if ($result->num_rows() > 0) return $result;
    else return false;
  }

  public function addCategorie($values) 
  {
    $this->db->insert('categoria', $values);
  }
}
