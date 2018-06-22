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

public function inputlaboratsero(){
  $query = $this->M_inputlab->getdatapas();
  $data['pasien'] = $query->result();
  $this->laman('laman/laboratorium/v_inputlabsero', $data);
}

public function addhemalab(){
  $data = array(
    'idPasien' => $this->input->post('pasien'),
    'hemoglobin' => $this->input->post('hemoglobin'),
    'eritrosit' => $this->input->post('Eritrosit'),
    'hematokrit' => $this->input->post('Hematokrit'),
    'lekosit' => $this->input->post('Lekosit'),
    'lajuendapdarah' => $this->input->post('LajuEndap'),
    'thrombosit' => $this->input->post('Thrombosit'),
    'MCV' => $this->input->post('MCV'),
    'MCH' => $this->input->post('MCH'),
    'MCHC' => $this->input->post('MCHC'),
    'basofil' => $this->input->post('Basofil'),
    'eosinofil' => $this->input->post('Eosinofil'),
    'batang' => $this->input->post('Batang'),
    'segmen' => $this->input->post('Segmen'),
    'limposit' => $this->input->post('Limposit'),
    'monosit' => $this->input->post('Monosit')
  );
  $this->M_inputlab->addhema($data);
  redirect('/');

}

public function addurinlab(){
  $data = array(
    'idPasien' => $this->input->post('pasien'),
    'Warna' => $this->input->post('wurin'),
    'Kejernihan' => $this->input->post('jernihan'),
    'BJ' => $this->input->post('BJ'),
    'PH' => $this->input->post('pH'),
    'Protein' => $this->input->post('protein'),
    'Glukosa' => $this->input->post('glukosa'),
    'Keton' => $this->input->post('keton'),
    'Bilirubin' => $this->input->post('bilirubin'),
    'Urobilinogen' => $this->input->post('urobilinogen'),
    'Nitrit' => $this->input->post('nitrit'),
    'Darah' => $this->input->post('darah'),
    'Lekosit' => $this->input->post('lekosit'),
    'sEritrosit' => $this->input->post('sEritrosit'),
    'sLekosit' => $this->input->post('sLekosit'),
    'sEpitel' => $this->input->post('sEpitel'),
    'Kristal' => $this->input->post('kristal')
  );

  $this->M_inputlab->addurin($data);
  // $data['idPasien'] = $this->input->post('protein');
  // $this->load->view('laman/v_dashboard', $data); redirect ke model
  redirect('/');
}

public function addserolab(){
  $data = array(
    'idPasien' => $this->input->post('pasien'),
    'Syphilis' => $this->input->post('Syphilis'),
    'HbsAg' => $this->input->post('HbsAg'),
    'Widal' => $this->input->post('Widal')
  );

  $this->M_inputlab->addsero($data);
  redirect('/');
}

}
 ?>
