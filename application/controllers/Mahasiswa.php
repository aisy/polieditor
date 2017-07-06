<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function index(){
        $this->load->view('mhs_dashboard');
    }

    public function list(){
    	$this->load->view('mhs_list');
    }

    public function profil(){
    	
    }

}
