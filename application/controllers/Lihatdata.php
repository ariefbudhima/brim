<?php
class lihatdata extends APT_Controller{
  public function __construct(){
      parent::__construct();
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
      $hema = $this->M_datapasien->getpemeriksaanhema($id);
      $urin = $this->M_datapasien->getpemeriksaanurin($id);
      $sero = $this->M_datapasien->getpemeriksaansero($id);

      $thorax = $this->M_datapasien->getpemeriksaanthorax($id);
      $leher = $this->M_datapasien->getpemeriksaanleher($id);
      $tht = $this->M_datapasien->getpemeriksaantht($id);
      $abdomen = $this->M_datapasien->getpemeriksaanabdomen($id);
      $neuro = $this->M_datapasien->getpemeriksaanneuro($id);

      $anamnase = $this->M_datapasien->getpemeriksaananamnase($id);
      $keluarga = $this->M_datapasien->getpemeriksaankeluarga($id);
      $pemeriksaan = $this->M_datapasien->getpemeriksaanpemeriksaan($id);

      // $query2 = $this->M_datapasien->getpemeriksaan2($id);
        $data['pasien'] = $hema->result();
        $data['pasien1'] = $urin->result();
        $data['pasien2'] = $sero->result();

        $data['pasien3'] = $thorax->result();
        $data['pasien4'] = $leher->result();
        $data['pasien5'] = $tht->result();
        $data['pasien6'] = $abdomen->result();
        $data['pasien7'] = $neuro->result();

        $data['pasien8'] = $anamnase->result();
        $data['pasien9'] = $keluarga->result();
        $data['pasien10'] = $pemeriksaan->result();

        $this->laman('laman/menu/v_dataspesifik', $data);
        // $this->load->view('lul', $data);
      // }

  }
}
 ?>
