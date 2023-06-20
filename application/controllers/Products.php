<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('MyModel');
    // $this->load->helper('redirect');
  }

  public function welcome()
  {
    $this->load->view('products/welcome_view');
  }

  public function listCategories()
  {
    $categories = $this->MyModel->getCategories();
    $data = array(
      "categories" => $categories
    );
    $this->load->view('products/categories_view', $data);
  }

  public function insertCategorie()
  {
    $this->load->view('products/insert_categorie_view');
  }

  public function insertNewCategorie()
  {
    $values = array(
      "nombre" => $this->input->post('categoria'),
      "fecha" => date("Y-m-d H:i:s"),
      "activo" => $this->input->post('status'),
    );

    $this->MyModel->addCategorie($values);
  }

}
