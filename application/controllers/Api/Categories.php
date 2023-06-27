<?php

require APPPATH . 'libraries\REST_Controller.php';
class Categories extends REST_Controller{
   
  public function __construct(){
    parent:: __construct();
    $this->load ->database();
  }
  
    
  public function index_get($id = 0){
    // en caso de recuperrar una categoria espesifica
    if (!empty($id)) {
      $data = $this ->db ->get_where('categoria', ['id_categoria'=> $id])->row_array();  
    }
    // recuperar todas las categorias
    else{
      $data = $this->db->get('categoria')->result();
    }
    $this->response($data, REST_Controller::HTTP_OK);
  }

  public function index_post(){
    $input = $this->input->post();
    $this->db->insert("categoria", $input);
    $this->response(['Categoria agregada'], REST_Controller::HTTP_OK);
  }

  public function index_put($id){
    $input = $this->put();
    $this->db->update('categoria', $input, array("id_categoria" => $id));
    $this->response(['categoria actualizada'], REST_Controller::HTTP_OK);

  }

  public function index_delete($id){
    $this->db->delete("categoria", array("id_categoria" => $id));
    $this->response(['categoria eliminada'], REST_Controller::HTTP_OK);
  }
}