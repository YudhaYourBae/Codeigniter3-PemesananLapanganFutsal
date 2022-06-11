<?php
defined('BASEPATH') or exit('No direct script allowed access');
class DB_Futsal extends CI_Model
{
  public function Registration()
  {
    $data = [
      'nama_lengkap' => $this->input->post('nama_lengkap', true),
      'email' => $this->input->post('email', true),
      'password' => password_hash($this->input->post('password',true), PASSWORD_DEFAULT),
      'konfirpassword' => password_hash($this->input->post('konfirpassword',true), PASSWORD_DEFAULT)
    ];
    $this->db->insert('user', $data);
  }
}
