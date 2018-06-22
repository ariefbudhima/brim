<?php
  class M_inputlab  extends CI_Model{
    public function getdatapas(){
      $this->db->select('idPasien,nmPasien');
      $this->db->from('pasien');
      $query = $this->db->get();
      return $query;
    }

    public function addhema($data){
      $this->db->insert('labhema', $data);
    }

    public function addurin($data){
      $this->db->insert('laburin', $data);
    }

    public function addsero($data){
      $this->db->insert('labsero', $data);
    }
  }

 ?>
