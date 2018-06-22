<?php
class inputMEdic extends APT_Controller{
  public function __construct(){
      parent::__construct();
      $this->load->model('M_inputrad');
      $this->load->model('M_inputlab');
      $this->load->model('M_inputmed');
}

public function index(){
  if (!$this->session->userdata("masuk")){
          redirect("/");
      }
  $role = $this->session->userdata('akses');
  // $this->load->view('laman/radiologi/v_inputradthorax');
  redirect('Dashboard','refresh');
}

public function anamnase(){
  $query = $this->M_inputlab->getdatapas();
  $data['pasien'] = $query->result();
  $this->laman('laman/medical/v_inputmedanamnase', $data);
  // $this->load->view('laman/radiologi/v_inputradthorax');
}

public function riwayatkeluarga(){
  $query = $this->M_inputlab->getdatapas();
  $data['pasien'] = $query->result();
  $this->laman('laman/medical/v_inputmedkeluarga', $data);
}

public function pemeriksaanmed(){
  $query = $this->M_inputlab->getdatapas();
  $data['pasien'] = $query->result();
  $this->laman('laman/medical/v_inputmedpemeriksaan', $data);
}

public function addanamnasemed(){
  $data = array(
    'idPasien' => $this->input->post('pasien'),
    'Hepatitis' => $this->input->post('Hepatitis'),
    'TBC' => $this->input->post('TBC'),
    'Hipertensi' => $this->input->post('Hipertensi'),
    'Diabetes' => $this->input->post('Diabetes'),
    'Alergi' => $this->input->post('Alergi'),
    'Operasi' => $this->input->post('Operasi'),
    'Jantung' => $this->input->post('Jantung'),
    'Inap' => $this->input->post('Inap'),
    'PTulang' => $this->input->post('ptulang'),
    'ObatRutin' => $this->input->post('Obat')
  );
  $this->M_inputmed->addanamnase($data);
  redirect('/');
}

public function addkeluargamed(){
  $data = array(
    'idPasien' => $this->input->post('pasien'),
    'Jantung' => $this->input->post('jantung'),
    'DTinggi' => $this->input->post('dtinggi'),
    'Kmanis' => $this->input->post('kmanis'),
    'Stroke' => $this->input->post('Stroke'),
    'Paru' => $this->input->post('Paru'),
    'Kanker' => $this->input->post('Kanker'),
    'GJiwa' => $this->input->post('gjiwa'),
    'Ginjal' => $this->input->post('Ginjal'),
    'SCerna' => $this->input->post('scerna'),
    'Lainnya' => $this->input->post('Lainnya')
  );
  $this->M_inputmed->addkeluarga($data);
  redirect('/');
}

public function addpemeriksaanmed(){
  $data = array(
    'idPasien' => $this->input->post('pasien'),
    'Tinggi' => $this->input->post('tinggi'),
    'Berat' => $this->input->post('Berat'),
    'Nadi' => $this->input->post('Nadi'),
    'Pernapasan' => $this->input->post('Pernapasan'),
    'Tensi' => $this->input->post('tensi'),
    'Harihari' => $this->input->post('Harihari'),
    'Periksa' => $this->input->post('Periksa')
  );
  $this->M_inputmed->addpemeriksaan($data);
  redirect('/');
}
//
// public function inputradleher(){
//   $query = $this->M_inputlab->getdatapas();
//   $data['pasien'] = $query->result();
//   $this->laman('laman/radiologi/v_inputradleher', $data);
// }
//
// public function inputradneuro(){
//   $query = $this->M_inputlab->getdatapas();
//   $data['pasien'] = $query->result();
//   $this->laman('laman/radiologi/v_inputradneurologi', $data);
// }

}
 ?>
