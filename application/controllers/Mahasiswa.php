<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller{

  var $API="";

  public function __construct(){
    parent::__construct();
    $this->API="http://localhost/polieditor_dosen";
    //Codeigniter : Write Less Do More
    $this->load->model('Model_mahasiswa');
  }

  function index(){
    $id = "1";

    $json  = $this->curl->simple_get($this->API."/Tugas/getTugasKelas/".$id);
    $json1 = $this->curl->simple_get($this->API."/Materi/getMateri/".$id);

    $data['tugas']         = json_decode($json);
    $data['materi']        = json_decode($json1);

    // print_r($data['materi']);
    $data['link_download'] = $this->API;
    //
    $this->load->view('mhs_dashboard', $data);
  }

  public function login(){
    $log = $this->Model_mahasiswa->login();
    print_r($log);
  }

<<<<<<< HEAD
=======
    public function index(){
        $this->load->view('mhs_dashboard');
    }

    public function list(){
    	$this->load->view('mhs_list');
    }

    public function profil(){
    	
    }

>>>>>>> ad240c42a0c37e6211328743b19719ad6cf6217e
}
