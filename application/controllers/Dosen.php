<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller {

  public function __construct(){
    parent::__construct();
    //Codeigniter : Write Less Do More

    $this->load->model('Model_dosen');
    $this->load->model('Model_kelas');
  }

  public function index(){
    $data['kelas'] = $this->Model_kelas->all();
    $this->load->view('dosen_dashboard', $data);
  }

  public function login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $log = $this->Model_dosen->login($username, $password);

    // print_r($log);

    if($log){
      $array = array(
        'nip'      => $log->nip,
        'username' => $log->nama_dosen
      );
      $this->session->set_userdata($array);

      redirect('dosen/index', 'refresh');
    }else{
      $this->session->set_flashdata('Username atau Password Salah');
      redirect('Welcome/index');
    }

  }

  public function logout($value=''){
    # code...
    $this->session->sess_destroy();
    redirect('home', 'refresh');
  }
}
