<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index(){

  }

  public function insert(){
    $id_tugas = $this->input->post('id_tugas');
    $name_folder = $this->session->userdata('kelas') . '/' . $id_tugas;
    $upload_dir = 'folder_tugas/'.$name_folder.'/';

    if(!is_dir($upload_dir)) {
      echo $upload_dir;
      mkdir($upload_dir, 0775, true);
    }

    $config['upload_path'] = $upload_dir;
    $config['allowed_types'] = 'ppt|pdf|docx|html';
    // $config['encrypt_name'] = true;
    $config['file_name'] = $this->session->userdata('nim');

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('nama_file')) {

      $data = array('upload_data' => $this->upload->data());
    } else {
      echo $this->upload->display_errors();
    }
    redirect(base_url('mahasiswa/submitHtml/' . $this->session->userdata('kelas')));
  }

  public function dirTugas($id, $id2){

    $this->load->helper(array('directory'));

    $dir = directory_map('./folder_tugas/'.$id.'/'.$id2, 1);

    if (!$dir) {
      $dir = array();
    }

    $this->output
     ->set_status_header(200)
     ->set_content_type('application/json', 'utf-8')
     ->set_output(json_encode($dir, JSON_PRETTY_PRINT))
     ->_display();
     exit;

  }

}
