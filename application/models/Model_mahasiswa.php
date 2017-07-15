<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_mahasiswa extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $data = $this->db->get('mahasiswa', array('username'=>$username,'password'=>$password));

    return $data->first_row();
  }

}
?>
