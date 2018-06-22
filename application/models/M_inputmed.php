<?php
  class M_inputmed extends CI_Model{

    public function addanamnase($data){
      $this->db->insert('medicalanamnase', $data);
    }

    public function addkeluarga($data){
      $this->db->insert('medicalkeluarga', $data);
    }

    public function addpemeriksaan($data){
      $this->db->insert('medicalpemeriksaan', $data);
    }
  }
 ?>
