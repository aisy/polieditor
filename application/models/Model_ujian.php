<?php

class Model_ujian extends CI_Model {

    protected $table = 'ujian';
    protected $primaryKey = 'id_ujian';

    public function __construct() {
        parent::__construct();
    }


    public function all() {
        return $this->db->get($this->table)->result();
    }

    public function lastRow()
    {
      return $this->db->get($this->table)->last_row();
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


}
