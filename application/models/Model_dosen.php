<?php

class Model_dosen extends CI_Model {

    protected $table = 'dosen';
    protected $primaryKey = 'nip';

    public function __construct() {
        parent::__construct();
    }


    public function all() {
        return $this->db->get($this->table)->result();
    }

    public function find($id) {
        $this->db->where($this->primaryKey, $id);
        return $this->db->get($this->table)->row();
    }

    public function where($field, $value) {
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

    public function login($username, $password){
      # code...
      $data = $this->db->get_where($this->table, array('nip'=>$username, 'password'=>$password));

      return $data->first_row();
    }
}