<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	var $API="";

  public function __construct(){
    parent::__construct();
    $this->API="http://localhost/polieditor_dosen";
    //Codeigniter : Write Less Do More
    $this->load->model('Model_mahasiswa');
  }

	public function index(){
		if(isset($_POST['login'])){
			// $data_kelas = $this->curl->simple_get();
		}

		$this->load->view('welcome_message');
	}
}
