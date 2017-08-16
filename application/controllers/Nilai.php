<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller{

  public function __construct(){
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('Model_nilai'));
  }

  function index($nim){
    $dir = "http://localhost/polieditor/folder_tugas/";
    $files = opendir($dir."TI-4D".'/');

    print_r($files);

    // $this->load->view('nilai');
  }

  public function insert(){
    // $data = (array)json_decode(file_get_contents('php://input'));
    $data = array(
      'nama_nilai'=>$this->input->post('nama_ujian'),
      'nim'     =>$this->input->post('nim'),
      'nilai'   =>$this->input->post('nilai')
    );
    $insert = $this->Model_nilai->insert($data);

    // json_decode(json_encode($data), true);

    // $this->output
    // ->set_status_header(200) //header untuk service
    // ->set_content_type('application/json', 'utf-8') //tipe dari data=>pake JSON
    // ->set_output(json_encode($login, JSON_PRETTY_PRINT)) //hasil yang ditampilkan menggunakan json_encode dalam bentuk tampilan cantik
    // ->_display();
    // exit;
  }

}
