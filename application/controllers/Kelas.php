<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller{

  var $API = '';

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More

    $this->API  = 'http://localhost/skripsiku-kemahasiswaan';
    $this->load->model(array('Model_kelas','Model_tugas', 'Model_materi','Model_ujian'));
  }

  public function index($id){
    $data['tugas']     = $this->Model_tugas->where('tugas.id_kelas', $id);
    $data['materi']    = $this->Model_materi->where('materi.id_kelas', $id);
    $data['kelas']     = $this->Model_kelas->find($id);

    $mhs               = $this->curl->simple_get($this->API.'/Service/getKelas/'.$id);
    $data['mhs']       = json_decode($mhs, TRUE);
    $data['ujian']     = $this->Model_ujian->where('ujian.id_kelas', $id);

    // print_r($data['mhs']);

    $this->load->view('kelas', $data);
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

  // ===========================================================================
  // SERVICE
  // ===========================================================================

  public function kelas_mahasiswa($id){

    $data = $this->db->get_where('kelas', array('id_kelas'=>$id));

  }

}

?>
