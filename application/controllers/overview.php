<?php

/**
 *
 */
class Overview extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("user_model");
    if ($this->user_model->isNotLogin()) redirect(site_url('auth/login'));
  }

  public function index()
  {
    //load view admin/pvervoew.php
    $this->load->view("auth/login");
  }
}
