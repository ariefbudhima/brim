<?php
class inputRadio extends APT_Controller{
  public function __construct(){
      parent::__construct();
      $this->load->model('M_inputrad');
      $this->load->model('M_inputlab');
}

public function index(){
  if (!$this->session->userdata("masuk")){
          redirect("/");
      }
  $role = $this->session->userdata('akses');
  // $this->load->view('laman/radiologi/v_inputradthorax');
  redirect('Dashboard','refresh');
}

public function inputradthorax(){
  $query = $this->M_inputlab->getdatapas();
  $data['pasien'] = $query->result();
  $this->laman('laman/radiologi/v_inputradthorax', $data);
  // $this->load->view('laman/radiologi/v_inputradthorax');
}

public function inputradabdomen(){
  $query = $this->M_inputlab->getdatapas();
  $data['pasien'] = $query->result();
  $this->laman('laman/radiologi/v_inputradabdomen', $data);
}

public function inputradtht(){
  $query = $this->M_inputlab->getdatapas();
  $data['pasien'] = $query->result();
  $this->laman('laman/radiologi/v_inputradtht', $data);
}

public function inputradleher(){
  $query = $this->M_inputlab->getdatapas();
  $data['pasien'] = $query->result();
  $this->laman('laman/radiologi/v_inputradleher', $data);
}

public function inputradneuro(){
  $query = $this->M_inputlab->getdatapas();
  $data['pasien'] = $query->result();
  $this->laman('laman/radiologi/v_inputradneurologi', $data);
}

public function addthoraxrad(){
  $data = array(
    'idPasien' => $this->input->post('pasien'),
    'Bentuk' => $this->input->post('Bentuk'),
    'Ekspansi' => $this->input->post('Ekspansi'),
    'Palpasi' => $this->input->post('Palpasi'),
    'Perkusi' => $this->input->post('Perkusi'),
    'Auskultasi' => $this->input->post('Auskultasi'),
    'Lain' => $this->input->post('Lainnya'),
  );

  $this->M_inputrad->addthorax($data);
  redirect('/');
}

public function addleherrad(){
  $data = array(
    'IdPasien' => $this->input->post('pasien'),
    'leher' => $this->input->post('LNormal')
  );

  $this->M_inputrad->addleher($data);
  redirect('/');
}

public function addthtrad(){
  $data = array(
    'idPasien' => $this->input->post('pasien'),
    'dtelinga' => $this->input->post('DTelinga'),
    'ltelinga' => $this->input->post('LTelinga'),
    'tympani' => $this->input->post('Tympani'),
    'hidung' => $this->input->post('Hidung'),
    'sinus' => $this->input->post('Sinus'),
    'faring' => $this->input->post('Faring'),
    'tensil' => $this->input->post('Tensil'),
    'lidah' => $this->input->post('Lidah'),
    'gusi' => $this->input->post('Gusi'),
    'gigi' => $this->input->post('Gigi'),
    'karang' => $this->input->post('karang'),
    'lubanggigi' => $this->input->post('Gberlubang'),
    'tambalgigi' => $this->input->post('TGigi'),
    'gigitanggal' => $this->input->post('GigiTanggal'),
    'gigimiring' => $this->input->post('GigiMiring'),
    'radix' => $this->input->post('Radix')
  );

  $this->M_inputrad->addtht($data);
  redirect('/');
}

public function addabdomenrad(){
  $data = array(
    'idPasien' => $this->input->post('pasien'),
    'Bentuk' => $this->input->post('Bentuk'),
    'Palpasi' => $this->input->post('Palpasi'),
    'Hati' => $this->input->post('Hati'),
    'Limpa' => $this->input->post('Limpa'),
    'Ginjal' => $this->input->post('Ginjal'),
    'Rectal' => $this->input->post('Rectal'),
    'Hernia' => $this->input->post('Hernia'),
    'Haemoroid' => $this->input->post('Haemoroid'),
    'Lainnya' => $this->input->post('Lainnya')
  );
  $this->M_inputrad->addabdomen($data);
  redirect('/');
}

public function addneurolograd(){
  $data = array(
    'idPasien' => $this->input->post('pasien'),
    'Fisiologi' => $this->input->post('Fisiologi'),
    'Patologis' => $this->input->post('Patologis'),
    'Motor' => $this->input->post('Motor'),
    'Pusat' => $this->input->post('Pusat'),
    'Tepi' => $this->input->post('Tepi'),
    'Lidah' => $this->input->post('Lidah'),
    'Lainnya' => $this->input->post('Lainnya')
  );
  $this->M_inputrad->addneurolog($data);
  redirect('/');
}

}
 ?>
