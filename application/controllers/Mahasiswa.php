<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{

  public function index(){
    $this->load->view('mhs_dashboard');
  }

  public function materi(){
    $this->load->view('mhs/materi');
  }

  public function latihan(){
    $this->load->view('mhs/latihan');
  }

  public function editor(){
    $this->load->view('mhs/dashboard_latihan');
  }

  public function penilaian(){
    $this->load->view('mhs/dashboard_penilaian');
  }

  public function tugas(){
    $this->load->view('mhs/tugas_html');
  }

  public function list_tugas(){
    $this->load->view('mhs/tugas_soal');
  }

  public function pilgan(){
    $this->load->view('mhs/soal_pilgan');
  }

  public function essay(){
    $this->load->view('mhs/soal_essay');
  }

  }
