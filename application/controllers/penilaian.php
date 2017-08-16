<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penilaian extends CI_Controller{

  var $API  = '';
  var $API2 = '';
  public function __construct(){
    parent::__construct();
    $this->API = 'http://localhost/polieditor_dosen/';
    $this->API2 = 'http://localhost/skripsiku-kemahasiswaan';
  }

  function index()
  {

  }

  public function insert(){
    $name_folder = $this->session->userdata('kelas');
    $upload_dir = 'folder_tugas/'.$name_folder.'/';

    if(!is_dir($upload_dir)) {
      echo $upload_dir;
      mkdir($upload_dir, 0775, true);
    }

    $config['upload_path'] = $upload_dir;
    $config['allowed_types'] = 'ppt|pdf|docx|html';
    // $config['encrypt_name'] = true;
    $config['file_name'] = $this->session->userdata('nim');;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('nama_file')) {

      $data = array('upload_data' => $this->upload->data());
    } else {
      echo $this->upload->display_errors();
    }
    redirect(base_url('mahasiswa/tugas/' . $this->session->userdata('kelas')));
  }

  public function nilai_pilgan(){
    $id   = $this->input->post('id_ujian');
    $data = $this->curl->simple_get($this->API.'Soal/list_pilgan/'.$id);

    $data_real = json_decode($data, TRUE);

    $i=0;
    $benar[]="";
    foreach ($data_real as $key => $value) {
      $jawaban = $this->input->post('group1'.$i);
      if($value['jawaban']==$jawaban){
        $benar[]+=1;
      }
      $i++;
    }

    $nilai = (array_sum($benar)*100)/count($data_real);

    $data = array(
        'id_ujian'=>$data_real[0]['nama_ujian'],
        'nim'     =>$this->session->userdata('nim'),
        'nilai'   =>$nilai
      );

      // send POST to service
      $insert = $this->curl->simple_post($this->API.'/Nilai/insert', $data, array(CURLOPT_BUFFERSIZE => 10));
      // $convert = json_decode($insert);

      // if (!$convert) {
      //   redirect(base_url(),'refresh');
      // }

      // redirect(base_url('Mahasiswa/index/'.$this->session->userdata('kelas')),'refresh');
  }

}
