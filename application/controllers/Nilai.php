<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai extends CI_Controller{

  var $API="";

  public function __construct(){
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('Model_nilai'));
    $this->API = 'http://localhost/polieditor/';
  }

  function index($nim){

    $dir = $this->curl->simple_get($this->API.'Tugas/dirTugas/TI-4D');
    $data['tugas'] = json_encode($dir);

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

  public function insertNilaiUjian($id_tugas){

    $data = array(
      'nama_nilai'=>$this->input->post('nama_nilai'),
      'nim'     =>$this->input->post('nim'),
      'nilai'   =>$this->input->post('nilai')
    );
    $insert = $this->Model_nilai->insert($data);

    redirect('tugas/listTugas/' . $id_tugas, 'refresh');
  }
}
