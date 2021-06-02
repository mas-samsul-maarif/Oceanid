<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelku  extends CI_model {

    public function getData($tabel)
    {
        $ocean = $this->db->query("SELECT * FROM ".$tabel);
        return $ocean->result_array();
    }
    public function masukkan($tabel, $data)
    {
        $ocean = $this->db->insert($tabel, $data);
        return $ocean;
    }
    public function hapus($tabel, $where)
    {
        $ocean = $this->db->delete($tabel, $where);
        return $ocean;
    }
    public function perbarui($tabel, $data, $where)
    {
        $ocean = $this->db->update($tabel, $data, $where);
        return $ocean;
    }
    public function getPK($tabel, $where) //PK = Primary Key 
    {
        $ocean = $this->db->get_where($tabel, $where);
        return $ocean->result_array();
    }
}
