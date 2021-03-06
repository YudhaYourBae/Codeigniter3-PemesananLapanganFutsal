<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('DB_Futsal');
    $this->load->helper('form');
    $this->load->library('form_validation');
    $Access = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
    if (!$Access) {
      redirect('Login');
    }
  }
  public function index()
  {
    $data['Title'] = 'Home - ';
    $data['SubTitle'] = 'Rafhely';
    $data['TotalLapangan'] = $this->DB_Futsal->TotalCourts();
    $data['LapanganTersedia'] = $this->db->query("SELECT ltersedia FROM lapangan where ltersedia = 1")->num_rows();
    $data['LapanganDigunakan'] = $this->db->query("SELECT ltersedia from lapangan where ltersedia = 0")->num_rows();
    $data['TotalUser'] = $this->DB_Futsal->TotalUsers();
    $data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
    $this->load->view('Templates/header', $data);
    $this->load->view('viewHome/index.php', $data);
    $this->load->view('Templates/footer');
  }
}
