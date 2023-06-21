<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('MyModel');
    $this->load->helper('url');
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

  public function insertCategory()
  {
    $this->load->view('products/insert_category_view');
  }

  public function insertNewCategory()
  {
    $values = array(
      "nombre" => $this->input->post('categoria'),
      "fecha" => date("Y-m-d H:i:s"),
      "activo" => $this->input->post('status'),
    );

    $this->MyModel->addCategory($values);
  }

  public function deleteCategory()
  {
    $id = $this->uri->segment(2);
    $this->MyModel->lessCategory($id);
    redirect(base_url('index.php/products/listCategories'));
  }

  public function updateCategory()
  {
    $id = $this->uri->segment(2);
    $categories = $this->MyModel->getCategories($id);

    $categorie = ($categories != false) ? $categories->row(0) : false;

    $data = array(
      'categorie' => $categorie
    );

    $this->load->view('products/update_category_view', $data);
  }
}
