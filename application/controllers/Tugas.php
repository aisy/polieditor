<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {

  public function __construct() {
    parent::__construct();
    //Codeigniter : Write Less Do More

    $this->load->model('Model_tugas');
  }


  public function index() {
    $this->load->view('tugas');
  }

  public function insert() {

    $tgl_mulai = $this->input->post('tgl_mulai') . " " . $this->input->post('wkt_mulai');
    $tgl_akhir = $this->input->post('tgl_selesai') . " " . $this->input->post('wkt_selesai');
    $id_kelas = $this->input->post('id_kelas');

    $data = array(
      "judul" => $this->input->post('judul'),
      "jenis_tugas" => $this->input->post('jenis_tugas'),
      "isi_tugas" => $this->input->post('isi_tugas'),
      "waktu_mulai" => $tgl_mulai,
      "waktu_selesai" => $tgl_akhir,
      "id_kelas" => $id_kelas
    );

    $this->Model_tugas->insert($data);
    redirect('kelas/index/' . $id_kelas, 'refresh');
  }

  public function update($id) {
    $tgl_mulai = $this->input->post('tgl_mulai') . " " . $this->input->post('wkt_mulai');
    $tgl_akhir = $this->input->post('tgl_selesai') . " " . $this->input->post('wkt_selesai');

    $data = array(
      "judul" => $this->input->post('judul'),
      "jenis_tugas" => $this->input->post('jenis_tugas'),
      "isi_tugas" => $this->input->post('isi_tugas'),
      "waktu_mulai" => $tgl_mulai,
      "waktu_selesai" => $tgl_akhir
    );

    $this->Model_tugas->update($data, $id);
    redirect('kelas/index/' . $this->input->post('id_kelas'));
  }

  public function delete($id, $id_kelas) {
    $this->Model_tugas->delete($id);
    redirect('kelas/index/' . $id_kelas);
  }

  // =========================================================================
  // SERVICE
  // =========================================================================

  public function getTugas($id){
    $data = $this->Model_tugas->getTugas($id);

    $this->output
    ->set_status_header(200) //header untuk service
    ->set_content_type('application/json', 'utf-8') //tipe dari data=>pake JSON
    ->set_output(json_encode($data, JSON_PRETTY_PRINT)) //hasil yang ditampilkan menggunakan json_encode dalam bentuk tampilan cantik
    ->_display();
    exit;
  }

  public function getTugasKelas($id){
    $data = $this->Model_tugas->getTugasKelas($id);

    $this->output
    ->set_status_header(200) //header untuk service
    ->set_content_type('application/json', 'utf-8') //tipe dari data=>pake JSON
    ->set_output(json_encode($data, JSON_PRETTY_PRINT)) //hasil yang ditampilkan menggunakan json_encode dalam bentuk tampilan cantik
    ->_display();
    exit;
  }


}
