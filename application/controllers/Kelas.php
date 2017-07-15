<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model(array('Model_kelas', 'Model_tugas', 'Model_materi'));
  }

  public function index($id){
    $data['tugas'] = $this->Model_tugas->where('tugas.id_kelas', $id);
    $data['materi'] = $this->Model_materi->where('materi.id_kelas', $id);
    $data['kelas'] = $this->Model_kelas->find($id);
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
