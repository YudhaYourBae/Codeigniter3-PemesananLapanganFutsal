<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $Access = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
    if (!$Access) {
      redirect('Login');
    }
  }
  public function index()
  {
    $data['Title'] = 'Rafhely';
    $this->load->view('Templates/header', $data);
    $this->load->view('Templates/footer');
  }
}
