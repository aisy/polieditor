<?php

/**
 * Created by PhpStorm.
 * User: aka
 * Date: 08/07/17
 * Time: 7:01
 */
class Model_tugas extends CI_Model
{
    protected $table = 'tugas';
    protected $primaryKey = 'id_tugas';

    public function __construct() {
        parent::__construct();
    }
    public function all() {
        $this->db->join('kelas', 'kelas.id_kelas = tugas.id_kelas');
        return $this->db->get($this->table)->result();
    }

    public function find($id) {
        $this->db->join('kelas', 'kelas.id_kelas = tugas.id_kelas');
        $this->db->where($this->primaryKey, $id);
        return $this->db->get($this->table)->row();
    }

    public function where($field, $value) {
        $this->db->join('kelas', 'kelas.id_kelas = tugas.id_kelas');
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

    // =========================================================================
    // SERVICE
    // =========================================================================

    public function getTugas($id){
      $data = $this->db->get_where('tugas', array('id_tugas'=>$id));

      return $data->first_row();
    }

    public function getTugasKelas($id){
      $data = $this->db->get_where('tugas', array('id_kelas'=>$id));

      return $data->result();
    }
}
