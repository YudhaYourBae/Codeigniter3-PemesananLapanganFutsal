<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Lapangan extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('DB_Futsal');
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    $Access = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
    if (!$Access) {
      redirect('Login');
    }
  }
  public function index()
  {
    $data['Title'] = 'Daftar Lapangan - ';
    $data['SubTitle'] = 'Rafhely ';
    $data['Lapangan'] = $this->DB_Futsal->getCourts();
    $data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
    $this->load->view('Templates/header', $data);
    $this->load->view('viewLapangan/index', $data);
    $this->load->view('Templates/footer');
  }
  public function TambahLapangan()
  {
    $data['Title'] = 'Tambah Lapangan - ';
    $data['SubTitle'] = 'Rafhely';
    $data['user'] = $this->db->get_where('user', array('email' => $this->session->userdata('email')))->row_array();
    $this->form_validation->set_rules('lkode', 'Kode Lapangan', 'required|is_unique[lapangan.lkode]');
    $this->form_validation->set_rules('lnama', 'Nama Lapangan', 'required');
    $this->form_validation->set_rules('ljenis', 'Jenis Lapangan', 'required');
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('Templates/header', $data);
      $this->load->view('viewLapangan/tambahLapangan', $data);
      $this->load->view('Templates/footer');
    } else {
      $this->DB_Futsal->addCourts();
      $this->session->set_flashdata('Pesan', '<div id="addData"></div>');
      redirect('Lapangan');
    }
  }
  public function HapusLapangan($Id)
  {
    $this->DB_Futsal->removeCourt($Id);
    $this->session->set_flashdata('Pesan', '<div id="deleteData"></div>');
    redirect('Lapangan');
  }
}
