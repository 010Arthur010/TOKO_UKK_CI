<?php

class Model_kasir extends CI_Model
{
       public function data_kasir()
       {
              return $this->db->get('kasir');
       }
       public function tambah($data, $table)
       {
              $this->db->insert($table, $data);
       }
       public function edit_kasir($where, $table)
       {
              return $this->db->get_where($table, $where);
       }
       public function update($where, $data, $table)
       {
              $this->db->where($where);
              $this->db->update($table, $data);
       }
       public function delete($where, $table)
       {
              $this->db->where($where);
              $this->db->delete($table);
       }
}
