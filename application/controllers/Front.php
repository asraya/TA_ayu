<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

  public function index() {
    $data = array(
      'title' => "General"
    );
    $this->load->view('null', $data);
  }

}