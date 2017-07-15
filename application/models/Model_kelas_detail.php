<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classname extends CI_Model{

  protected $table      = 'kelas_detail';
  protected $primaryKey = 'id_kelas';

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function all() {
      $this->db->join('kelas', 'kelas.id_kelas = kelas_detail.id_kelas');
      return $this->db->get($this->table)->result();
  }

  public function find($id) {
      $this->db->join('kelas', 'kelas.id_kelas = kelas_detail.id_kelas');
      $this->db->where($this->primaryKey, $id);
      return $this->db->get($this->table)->row();
  }

  public function where($field, $value) {
      $this->db->join('kelas', 'kelas.id_kelas = kelas_detail.id_kelas');
      $this->db->where($field, $value);
      return $this->db->get($this->table)->result();
  }

  public function insert($data) {
      $this->db->insert($this->table, $data);
  }

  public function update($data, $id) {
      $this->db->where($this->primaryKey, $id);
      $this->db->update($this->table, $data);
  }

  public function delete($id) {
      $this->db->where($this->primaryKey, $id);
      $this->db->delete($this->table);
  }

}

?>
