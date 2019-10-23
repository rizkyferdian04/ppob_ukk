<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
		$this->load->model('Home_model');
  }

  public function index()
  {
    if($this->session->userdata('login_status')==TRUE)
    {
      $data['v_content'] = 'v_content';
      $this->load->model('Home_model');
      $this->load->view('v_template', $data)
    }
    else {
      redirect('index.php/login');
    }
  }

}
