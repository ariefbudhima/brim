<?php
  class M_inputlab  extends CI_Model{
    public function getdatapas(){
      $this->db->select('idPasien,nmPasien');
      $this->db->from('pasien');
      $query = $this->db->get();
      return $query;
    }
  }

 ?>
