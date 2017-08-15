<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{

  var $API  = '';
  var $API2 = '';
  public function __construct(){
    parent::__construct();
    $this->API = 'http://localhost/polieditor_dosen/';
    $this->API2 = 'http://localhost/skripsiku-kemahasiswaan';
  }

  public function login(){
    $data = array(
        'username'=>$this->input->post('username'),
        'password'=>$this->input->post('password'),
      );
      //send POST to service
      $insert = $this->curl->simple_post($this->API2.'/Service/login', $data, array(CURLOPT_BUFFERSIZE => 10));
      $convert = json_decode($insert);
      // print_r($convert);
      //set session
      $array = array(
        'nim'   => $convert->nim,
        'nama'  => $convert->nama_mahasiswa,
        'kelas' => $convert->kelas
      );
      $this->session->set_userdata($array);
      // print_r($this->session->userdata('kelas'));

      redirect(base_url('Mahasiswa/index/'.$this->session->userdata('kelas')),'refresh');

  }
  public function logout(){

    $this->session->sess_destroy();

    redirect(base_url(),'refresh');

  }

  public function index($id){
    $this->load->view('mhs_dashboard');
  }
  public function materi($id){
    if($id==" "){
      $id = $this->session->userdata('kelas');
    }
    $data_materi    = $this->curl->simple_get($this->API.'Materi/getMateri/'.$id);
    $data['materi'] = json_decode($data_materi, TRUE);
    $data['url']    = $this->API;
    // print_r($data['materi']);
    $this->load->view('mhs/materi', $data);
  }

  public function latihan($id){
    if($id==" "){
      $id = $this->session->userdata('kelas');
    }
    $data_latihan    = $this->curl->simple_get($this->API.'Tugas/getLatihanKelas/'.$id);
    $data['latihan'] = json_decode($data_latihan, TRUE);
    // print_r($data['latihan']);
    $this->load->view('mhs/latihan', $data);
  }

  public function editor($id){
    $data_latihan    = $this->curl->simple_get($this->API.'Tugas/getLatihan/'.$id);
    $data['latihan'] = json_decode($data_latihan, TRUE);

    // print_r($data['latihan']);

    $this->load->view('mhs/dashboard_latihan', $data);
  }

  public function penilaian(){
    $this->load->view('mhs/dashboard_penilaian');
  }

  public function submitHtml($id){
    $data_tugas    = $this->curl->simple_get($this->API.'Tugas/getTugasKelas/'.$id);
    $data['tugas'] = json_decode($data_tugas, TRUE);
    $this->load->view('mhs/tugas_html', $data);
  }

  public function list_soal(){
    $this->load->view('mhs/tugas_soal');
  }

  public function pilgan(){
    $this->load->view('mhs/soal_pilgan');
  }

  public function essay(){
    $this->load->view('mhs/soal_essay');
  }
}
