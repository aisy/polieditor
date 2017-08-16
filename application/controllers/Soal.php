<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soal extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('Model_soal','Model_ujian','Model_essay','Model_jawaban'));
  }

  function index(){

  }

  public function buat_soal(){
    $id_kelas   = $this->input->post('id_kelas');
    $jml_soal   = $this->input->post('jml_soal');

    $data['jml']   = $jml_soal;
    $data['kelas'] = $id_kelas;

    $object = array(
      'id_kelas'    => $id_kelas,
      'nama_ujian'  => $this->input->post('nama_ujian'),
      'keterangan'  => $this->input->post('keterangan'),
      'jenis_ujian' => $this->input->post('jenis_ujian')
    );

    $this->Model_ujian->insert($object);
    $data_terakhir = $this->Model_ujian->lastRow();

    $data['id_ujian'] = $data_terakhir->id_ujian;

    if($data_terakhir->jenis_ujian=="essay"){
      $this->load->view('soal/soal_essay', $data);
    }else{
      $this->load->view('soal/soal', $data);
    }

  }

  public function hapus_soal($id, $kelas) {
    $jenis_ujian = $this->Model_ujian->find($id)->jenis_ujian;

    if ($jenis_ujian == 'pilihan ganda') {
      $this->Model_soal->deleteByIdUjian($id);
    } else if ($jenis_ujian == 'essay') {
      $this->Model_essay->deleteByIdUjian($id);
    }

    $this->Model_ujian->delete($id);
    redirect(base_url('kelas/index/'.$kelas), 'refresh');
  }

  public function insertSoal(){
    $jml_soal   = $this->input->post('jml_soal');
    $kelas      = $this->input->post('id_kelas');

    $soal     = $this->input->post('soal');
    $pilihan1 = $this->input->post('jawaban_a');
    $pilihan2 = $this->input->post('jawaban_b');
    $pilihan3 = $this->input->post('jawaban_c');
    $pilihan4 = $this->input->post('jawaban_d');
    $jawaban  = $this->input->post('jawaban');

    // echo $soal[0];

    $object = array();
    for ($i=0; $i<$jml_soal; $i++) {
      $object = array(
        "id_ujian"  =>$this->input->post('id_ujian'),
        "soal"      =>$soal[$i],

        "pilihan1"  =>$pilihan1[$i],
        "pilihan2"  =>$pilihan2[$i],
        "pilihan3"  =>$pilihan3[$i],
        "pilihan4"  =>$pilihan4[$i],

        "jawaban"   =>$jawaban[$i]
      );
      // echo $soal[$i];
      $this->Model_soal->insert($object);
    }

    // print_r($object);
    redirect(base_url('kelas/index/'.$kelas), 'refresh');
  }

  public function updateSoal(){
    $kelas      = $this->input->post('id_kelas');
    $id_soal = $this->input->post('id_soal');
    $soal     = $this->input->post('soal');
    $pilihan1 = $this->input->post('jawaban_a');
    $pilihan2 = $this->input->post('jawaban_b');
    $pilihan3 = $this->input->post('jawaban_c');
    $pilihan4 = $this->input->post('jawaban_d');
    $jawaban  = $this->input->post('jawaban');

    // echo $soal[0];

    $i = 0;
    foreach ($soal as $row) {
      $object = array(
        "soal"      => $row,

        "pilihan1"  =>$pilihan1[$i],
        "pilihan2"  =>$pilihan2[$i],
        "pilihan3"  =>$pilihan3[$i],
        "pilihan4"  =>$pilihan4[$i],

        "jawaban"   =>$jawaban[$i]
      );
      // echo $soal[$i];
      $this->Model_soal->update($object, $id_soal[$i]);
      $i++;
    }

    // print_r($object);
    redirect(base_url('kelas/index/'.$kelas), 'refresh');
  }

  public function insertEssay(){
    $jml_soal   = $this->input->post('jml_soal');
    $kelas      = $this->input->post('id_kelas');

    $soal     = $this->input->post('soal');

    // echo $soal[0];

    $object = array();
    for ($i=0; $i<$jml_soal; $i++) {
      $object = array(
        "id_ujian"  =>$this->input->post('id_ujian'),
        "soal"      =>$soal[$i],
      );
      // echo $soal[$i];
      $this->Model_essay->insert($object);
    }

    // print_r($object);
    redirect(base_url('kelas/index/'.$kelas), 'refresh');
  }

  public function updateEssay(){
    $kelas      = $this->input->post('id_kelas');
    $soal     = $this->input->post('soal');
    $id_soal  = $this->input->post('id_soal');

    $i = 0;
    foreach ($soal as $row) {
      $object = array(
        "soal"      => $row
      );
      // echo $soal[$i];
      $this->Model_essay->update($object, $id_soal[$i++]);
    }

    // print_r($object);
    redirect(base_url('kelas/index/'.$kelas), 'refresh');
  }

  public function detail_soal($id, $kelas) {

    $jenis_ujian = $this->Model_ujian->find($id)->jenis_ujian;

    $data['kelas'] = $kelas;

    if ($jenis_ujian == 'pilihan ganda') {
      $data['soal'] = $this->Model_soal->where('id_ujian', $id);
      $this->load->view('soal/soal_edit', $data);
    } else if ($jenis_ujian == 'essay') {
      $data['soal'] = $this->Model_essay->where('id_ujian', $id);
      $this->load->view('soal/soal_essay_edit', $data);
    }
  }

  public function list_pilgan($id){
    $response = $this->Model_soal->where('id_ujian',$id);

    $this->output
     ->set_status_header(200)
     ->set_content_type('application/json', 'utf-8')
     ->set_output(json_encode($response, JSON_PRETTY_PRINT))
     ->_display();
     exit;
  }

  public function list_essay($id){
    $response = $this->Model_essay->where('id_ujian',$id);

    $this->output
     ->set_status_header(200)
     ->set_content_type('application/json', 'utf-8')
     ->set_output(json_encode($response, JSON_PRETTY_PRINT))
     ->_display();
     exit;
  }


}
