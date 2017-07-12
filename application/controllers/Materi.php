<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
    $this->load->model('Model_materi');
  }

  function index() {

  }

  public function insert() {

    $upload_dir = 'folder_materi/' . $this->input->post('id_kelas') . '_' . $this->input->post('nama_kelas') . "/";

    if(!is_dir($upload_dir)) {
      echo $upload_dir;
      mkdir($upload_dir, 0775, true);
    }

    $config['upload_path'] = $upload_dir;
    $config['allowed_types'] = 'ppt|pdf|docx';
    $this->load->library('upload', $config);

    if ($this->upload->do_upload('nama_file')) {
      $data = array(
        "id_dosen" => $this->session->userdata('nip'),
        "judul" => $this->input->post('judul'),
        "keterangan" => $this->input->post('keterangan'),
        "nama_file" => $upload_dir . $this->upload->data('file_name')
      );
      $this->Model_materi->insert($data);
    } else {
      echo $this->upload->display_errors();
    }
    redirect(base_url('kelas/index/' . $this->input->post('id_kelas')));
  }

  public function delete($id, $id_kelas) {
    $nama_file = $this->Model_materi->find($id)->nama_file;
    unlink($nama_file);
    $this->Model_materi->delete($id);
    redirect(base_url('kelas/index/' . $id_kelas));
  }

  // ===========================================================================
  // SERVICE
  // ===========================================================================

  public function get_all(){
    $respone = "";

    $this->output
     ->set_status_header(200)
     ->set_content_type('application/json', 'utf-8')
     ->set_output(json_encode($response, JSON_PRETTY_PRINT))
     ->_display();
     exit;
  }

  public function get($id){
    $respone = "";

    $this->output
     ->set_status_header(200)
     ->set_content_type('application/json', 'utf-8')
     ->set_output(json_encode($response, JSON_PRETTY_PRINT))
     ->_display();
     exit;
  }

}

?>
