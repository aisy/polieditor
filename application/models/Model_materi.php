<?php

/**
 * Created by PhpStorm.
 * User: aka
 * Date: 08/07/17
 * Time: 7:04
 */
class Model_materi extends CI_Model
{
    protected $table = 'materi';
    protected $primaryKey = 'id_materi';

    public function __construct() {
        parent::__construct();
    }
    public function all() {
//        $this->db->join('kelas', 'kelas.id_kelas = materi.id_kelas');
        return $this->db->get($this->table)->result();
    }

    public function find($id) {
//        $this->db->join('kelas', 'kelas.id_kelas = materi.id_kelas');
        $this->db->where($this->primaryKey, $id);
        return $this->db->get($this->table)->row();
    }

    public function where($field, $value) {
        $this->db->join('kelas', 'kelas.id_kelas = materi.id_kelas');
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