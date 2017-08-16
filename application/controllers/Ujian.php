<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ujian extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('Model_ujian'));
  }

  function index(){

  }

  public function listUjian($id){
    $response = $this->Model_ujian->where('id_kelas',$id);

    $this->output
     ->set_status_header(200)
     ->set_content_type('application/json', 'utf-8')
     ->set_output(json_encode($response, JSON_PRETTY_PRINT))
     ->_display();
     exit;
  }

  public function update($id){
    $object = array(
      'id_kelas'    => $this->input->post('id_kelas'),
      'nama_ujian'  => $this->input->post('nama_ujian'),
      'keterangan'  => $this->input->post('keterangan')
    );

    $this->Model_ujian->update($object, $id);
    redirect(base_url('kelas/index/'.$this->input->post('id_kelas')), 'refresh');
  }

  public function delete($id){
    $this->Model_ujian->update($object, $id);
    redirect(base_url('kelas/index/'.$this->input->post('id_kelas')), 'refresh');
  }

}
