<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {

    function __construct()
    {
        parent::__construct(); //
        $this->load->model('products_model');
        $this->load->model('categories_model');

    }

  public function index()
  {

    $search =$this->input->get('search');
    $name =$this->input->get('name');
    $categories_id=$this->input->get('categories_id');
    $condition=[];

    if(!empty($search)){
        if(!empty($name)){
            $condition['name']= array('$regex' => $name);

        }
        if(!empty($catrgories_id)){
            $condition['categories']= $this ->moongo_db->create_document_id($categories_id);
        }
    }
      $data['categories']=$this->categories_model->findAll();
      $data['products'] = $this->products_model->findAll();
      $data['name']=$name;
      $data['search']=$search;
      $data['categories_id']=$categories_id;



      $this->load->view('products/index',$data);
      $this->load->view('layout/head');
      $this->load->view('layout/header');
      $this->load->view('products/content',$data);
     // $this->load->view('layout/left-menu');
      $this->load->view('layout/footer');
      $this->load->view('layout/foot');
  
  }
 public function create()
 {
    $data['categories']=$this->categories_model->findAll();
    $this->load->view('products/index',$data);
    $this->load->view('layout/head');
    $this->load->view('layout/header');
    $this->load->view('products/create/content',$data);
    $this->load->view('layout/footer');
    $this->load->view('layout/foot');

 }
 public function save()
 
 {
    $post = $this->input->post('name');
    $price = $this->input->post('price');
    $categories = $this->input->post('categories');

    $data -array(
        "name" =>$name,
        "price"=>$price,
        "categories"=>$categories,
    );
         $id=$this->product_model->insert($data);
         if(!empty('$id')){
             $this->session->set_flashdata('success-mg','Product Added');
                redirect('products');
         }else{
             echo "error";
         }
 }

}