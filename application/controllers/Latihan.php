<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan extends CI_Controller{

  public function __construct(){
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index(){
    $this->load->view('latihan');
    // $this->load->view('sample');
  }

  public function insert(){

  }

  public function update(){

  }

  public function delete(){

  }

  // ===========================================================================
  // SERVICE
  // ===========================================================================
  public function get_latihan(){
    $respone = "";

    $this->output
     ->set_status_header(200)
     ->set_content_type('application/json', 'utf-8')
     ->set_output(json_encode($response, JSON_PRETTY_PRINT))
     ->_display();
     exit;
  }

  public function get_latihan_all($id){

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
