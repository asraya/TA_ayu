<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_mobil extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("mobil_model");
        $this->load->library('form_validation');
    }

  public function index() {
   
    $data["products"] = $this->mobil_model->getAll();

    $this->load->view('_layout/header', $data);
    $this->load->view('_layout/sidebar', $data);
    $this->load->view('admin/data_mobil', $data);
    $this->load->view('_layout/footer', $data);

  }
  public function add()
  {
      $product = $this->mobil_model;
      $validation = $this->form_validation;
      $validation->set_rules($product->rules());

      if ($validation->run()) {
          $product->save();
          $this->session->set_flashdata('success', 'Berhasil disimpan');
      }

      $this->load->view("admin/product/new_form");
  }

  public function edit($id = null)
  {
      if (!isset($id)) redirect('admin/products');
     
      $product = $this->mobil_model;
      $validation = $this->form_validation;
      $validation->set_rules($product->rules());

      if ($validation->run()) {
          $product->update();
          $this->session->set_flashdata('success', 'Berhasil disimpan');
      }

      $data["product"] = $product->getById($id);
      if (!$data["product"]) show_404();
      
      $this->load->view("admin/product/edit_form", $data);
  }

  public function delete($id=null)
  {
      if (!isset($id)) show_404();
      
      if ($this->mobil_model->delete($id)) {
          redirect(site_url('admin/products'));
      }
  }
}