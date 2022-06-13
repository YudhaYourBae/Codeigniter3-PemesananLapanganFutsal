<?php
defined('BASEPATH') or exit('No direct script allowed access');
class DB_Futsal extends CI_Model
{
  public function Registration()
  {
    $data = [
      'nama_lengkap' => $this->input->post('nama_lengkap', true),
      'email' => $this->input->post('email', true),
      'password' => password_hash($this->input->post('password', true), PASSWORD_DEFAULT),
      'konfirpassword' => password_hash($this->input->post('konfirpassword', true), PASSWORD_DEFAULT),
      'gambar' => 'profile.png'
    ];
    $this->db->insert('user', $data);
  }
  public function getCourts()
  {
    return $this->db->get('lapangan')->result();
  }
  public function TotalCourts()
  {
    return $this->db->get('lapangan')->num_rows();
  }
  public function TotalUsers()
  {
    return $this->db->get('user')->num_rows();
  }
  public function addCourts()
  {
    $gambar = $_FILES['gambar'];
    $config['upload_path']          = 'assets/img/lapangan/';
    $config['allowed_types']        = 'jpeg|jpg|png|svg';
    $config['max_size']             = 100;
    $config['max_width']            = 1024;
    $config['max_height']           = 768;
    $this->load->library('upload', $config);
    if ($this->upload->do_upload('gambar')) {
      $gambar = $this->upload->data('file_name');
    }
    $data = [
      'lnama' => $this->input->post('lnama', true),
      'lkode' => $this->input->post('lkode', true),
      'ljenis' => $this->input->post('ljenis', true),
      'ltersedia' => 1,
      'gambar' => $gambar
    ];
    $this->db->insert('lapangan', $data);
  }
  public function removeCourt($Id)
  {
    $this->db->where('Id', $Id);
    $this->db->delete('lapangan');
  }
}
