<?php
class lihatdata extends APT_Controller{
  public function __construct(){
      parent::__construct();
      $this->load->model('Beli');
      $this->load->model('M_datapasien');
  }

  public function index(){
    if (!$this->session->userdata("masuk")){
            redirect("/");
        }
    $role = $this->session->userdata('akses');
    redirect('Dashboard','refresh');
  }

  public function lookdata(){
    if ($this->session->userdata("masuk")) {
      $query = $this->M_datapasien->getdatapasien();
      $data['pasien'] = $query->result();
      $this->laman('laman/menu/v_datalaborat', $data);
    }
    else {
      redirect("/");
    }

  }

  public function getfullinfopas(){
    // if ($this->session->userdata("masuk")) {
      $id= $this->uri->segment(3);
      $query = $this->M_datapasien->getpemeriksaanhema($id);
      $query2 = $this->M_datapasien->getpemeriksaan2($id);
      // if ($query->num_rows()>0){
        $data['pasien'] = $query->result();
        $data['pasien1'] = $query2->result();
      // }
      // else {
      //   $data['pasien']= NULL;
      //   $data['pasien1']= NULL;
      // }

        $this->laman('laman/menu/v_dataspesifik', $data);
        // $this->load->view('lul', $data);
      // }

  }
}
 ?>
