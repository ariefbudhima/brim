<?php
class M_datapasien extends CI_Model{
  public function getdatapasien(){
    $this->db->select('*');
    $this->db->from('pasien');
    $kue = $this->db->get();
    return $kue;
  }

  function getpemeriksaan1($id){
        $this->db->select('top 1 *');
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
            $this->db->order_by('updated_at', 'desc');
            $kue = $this->db->get();
            return $kue;
          }
      function getpemeriksaanurin($id){
        $this->db->select('*');
        $this->db->from('laburin');
        $this->db->where('idPasien', $id);
        $this->db->order_by('updated_at', 'desc');
        $kue = $this->db->get();
        return $kue;
      }

      function getpemeriksaansero($id){
        $this->db->select('*');
        $this->db->from('labsero');
        $this->db->where('idPasien', $id);
        $this->db->order_by('updated_at', 'desc');
        $kue = $this->db->get();
        return $kue;
      }

      function getpemeriksaanthorax($id){
        $this->db->select('*');
        $this->db->from('radiothorax');
        $this->db->where('idPasien', $id);
        $this->db->order_by('updated_at', 'desc');
        $kue = $this->db->get();
        return $kue;
      }

      function getpemeriksaanleher($id){
        $this->db->select('*');
        $this->db->from('radioleher');
        $this->db->where('idPasien', $id);
        $this->db->order_by('updated_at', 'desc');
        $kue = $this->db->get();
        return $kue;
      }

      function getpemeriksaantht($id){
        $this->db->select('*');
        $this->db->from('radiotht');
        $this->db->where('idPasien', $id);
        $this->db->order_by('updated_at', 'desc');
        $kue = $this->db->get();
        return $kue;
      }

      function getpemeriksaanabdomen($id){
        $this->db->select('*');
        $this->db->from('radioabdomen');
        $this->db->where('idPasien', $id);
        $this->db->order_by('updated_at', 'desc');
        $kue = $this->db->get();
        return $kue;
      }

      function getpemeriksaanneuro($id){
        $this->db->select('*');
        $this->db->from('radioneuro');
        $this->db->where('idPasien', $id);
        $this->db->order_by('updated_at', 'desc');
        $kue = $this->db->get();
        return $kue;
      }

      function getpemeriksaananamnase($id){
        $this->db->select('*');
        $this->db->from('medicalanamnase');
        $this->db->where('idPasien', $id);
        $this->db->order_by('updated_at', 'desc');
        $kue = $this->db->get();
        return $kue;
      }

      function getpemeriksaankeluarga($id){
        $this->db->select('*');
        $this->db->from('medicalkeluarga');
        $this->db->where('idPasien', $id);
        $this->db->order_by('updated_at', 'desc');
        $kue = $this->db->get();
        return $kue;
      }

      function getpemeriksaanpemeriksaan($id){
        $this->db->select('*');
        $this->db->from('medicalpemeriksaan');
        $this->db->where('idPasien', $id);
        $this->db->order_by('updated_at', 'desc');
        $kue = $this->db->get();
        return $kue;
      }
}
 ?>
