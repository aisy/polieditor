<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{

  public function __construct(){
    parent::__construct();
  }

  public function index(){
    $this->load->view('mhs_dashboard');
  }

  public function materi(){
    $this->load->view('mhs/materi');
  }

  public function login(){

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

  }
