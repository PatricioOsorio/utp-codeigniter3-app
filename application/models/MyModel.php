<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MyModel extends CI_Model
{
  public function __construct()
  {
    $this->load->database();
  }

  public function getCategories($id = false)
  {
    if ($id != false) {
      $this->db->where('id_categoria', $id);
    }

    $result = $this->db->get('categoria');

    return ($result->num_rows() > 0) ? $result : false;
  }

  public function addCategory($values)
  {
    $this->db->insert('categoria', $values);
  }

  public function lessCategory($id)
  {
    $this->db->where('id_categoria', $id);
    $this->db->delete('categoria');
  }

  public function updateCategory($id, $data)
  {
    $this->db->where('id_categoria', $id);
    $this->db->update('categoria', $data);
  }
}
