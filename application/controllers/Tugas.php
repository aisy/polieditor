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
        $tgl_mulai = $this->input->post('tgl_mulai') . " " . $this->input->post('waktu_mulai');
        $tgl_akhir = $this->input->post('tgl_akhir') . " " . $this->input->post('waktu_akhir');

        $data = array("jenis_tugas" => $this->input->post('jenis_tugas'), "isi tugas" => $this->input->post('isi_tugas'), "waktu_mulai" => $tgl_mulai, "waktu_selesai" => $tgl_akhir);

        $this->Model_tugas->update($data, $id);
    }

    public function delete($id, $id_kelas) {
        $this->Model_tugas->delete($id);
        redirect('kelas/index/' . $id_kelas);
    }

}
