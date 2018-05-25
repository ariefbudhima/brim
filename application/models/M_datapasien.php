<?php
class M_datapasien extends CI_Model{
  public function getdatapasien(){
    $this->db->select('*');
    $this->db->from('pasien');
    $kue = $this->db->get();
    return $kue;
  }

  function getpemeriksaan1($id){
        $this->db->select('*');
        $this->db->from('laboratorium');
        $this->db->where('idPasien', $id);
        $kue = $this->db->get();
        return $kue;
      }

      function getpemeriksaan2($id){
        $this->db->select('*');
        $this->db->from('radiologi');
        $this->db->where('idPasien', $id);
        $kue = $this->db->get();
        return $kue;
      }

      function getpemeriksaanhema($id){
            $this->db->select('*');
            $this->db->from('labhema');
            $this->db->where('idPasien', $id);
            $kue = $this->db->get();
            return $kue;
          }


}
 ?>
