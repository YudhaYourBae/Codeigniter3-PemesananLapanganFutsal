<?php
defined('BASEPATH') or exit('No direct script allowed access');
class Login extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('DB_Futsal');
    $this->load->library('form_validation');
  }

  public function index()
  {
    $data = [
      'Title' => 'Login - ',
      'SubTitle' => 'Rafhely'
    ];
    $this->form_validation->set_rules('email', 'Email', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    if (!$this->form_validation->run() == false) {
      $this->VerifikasiLogin();
    } else {
      $this->load->view('ViewLogin/header', $data);
      $this->load->view('HomeLogin/index.php', $data);
      $this->load->view('ViewLogin/footer');
    }
  }
  public function VerifikasiLogin()
  {
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    $user = $this->db->get_where('user', array('email' => $email))->row_array();
    if ($user) {
      if (password_verify($password, $user['password'])) {
        $data['email'] = $user['email'];
        $this->session->set_userdata($data);
        redirect('Home');
      } else {
        $this->session->set_flashdata('Pesan', '<div id="Salah"></div>');
        redirect('Login');
      }
    } else {
      $this->session->set_flashdata('Pesan', '<div id="TidakTerdaftar"
    </div>');
      redirect('Login');
    }
  }

  public function Pendaftaran()
  {
    $data = [
      'Title' => 'Pendaftaran - ',
      'SubTitle' => 'Rafhely'
    ];
    $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[user.email]');
    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[konfirpassword]');
    $this->form_validation->set_rules('konfirpassword', 'Konfirmasi Password', 'required|trim|matches[password]');
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('ViewLogin/header', $data);
      $this->load->view('HomeLogin/Register', $data);
      $this->load->view('ViewLogin/footer');
    } else {
      $this->DB_Futsal->Registration();
      $this->session->set_flashdata('Created', '<div id="Created"></div>');
      redirect('Login');
    }
  }
  public function Logout()
  {
    $this->session->unset_userdata('email');
    $this->session->set_flashdata('Pesan', '<div id="logout"></div>');
    redirect('Login');
  }
}
