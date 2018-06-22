<?php
  class M_inputrad extends CI_Model{
    public function addthorax($data){
      $this->db->insert('radiothorax', $data);
    }

    public function addleher($data){
      $this->db->insert('radioleher', $data);
    }

    public function addtht($data){
      $this->db->insert('radiotht', $data);
    }

    public function addneurolog($data){
      $this->db->insert('radioneuro', $data);
    }

    public function addabdomen($data){
      $this->db->insert('radioabdomen', $data);
    }
  }
 ?>
