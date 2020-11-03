<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller 
{
    
  public function index() {
    $data = array(
      'title' => "General Dashboard"
    );
    $this->load->view('example/dashboard', $data);
  }
}