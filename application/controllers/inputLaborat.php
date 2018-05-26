<?php
class inputLaborat extends APT_Controller{
  public function __construct(){
      parent::__construct();
      $this->load->model('M_inputlab');
}

public function index(){
  if (!$this->session->userdata("masuk")){
          redirect("/");
      }
  $role = $this->session->userdata('akses');
  redirect('Dashboard','refresh');
}

public function inputlaborathema(){
  $query = $this->M_inputlab->getdatapas();
  $data['pasien'] = $query->result();
  $this->laman('laman/laboratorium/v_inputlabHema', $data);
}

public function inputlaboraturin(){
  $query = $this->M_inputlab->getdatapas();
  $data['pasien'] = $query->result();
  $this->laman('laman/laboratorium/v_inputlaburin', $data);
}
}
 ?>
