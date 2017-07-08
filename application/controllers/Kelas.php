<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Model_kelas');
  }

  function index($id){

    $this->load->view('kelas');
  }

  public function insert(){
    $data = array(
      "nama_kelas"  => $this->input->post('nama_kelas'),
      "prodi"       => $this->input->post('prodi'),
      "kuota_kelas" => $this->input->post('kuota'),
    );

    $this->Model_kelas->insert($data);
    redirect('dosen', 'refresh');
  }

  public function update(){
    $data = array(
      "nama_kelas"  => $this->input->post('nama_kelas'),
      "prodi"       => $this->input->post('prodi'),
      "kuota_kelas" => $this->input->post('kuota'),
    );

    $this->Model_kelas->update($data);
    redirect('dosen', 'refresh');
  }

  public function delete($id){
    $this->Model_kelas->delete($id);
    redirect('dosen/', 'refresh');
  }

}

?>
