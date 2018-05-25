<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Utama extends APT_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Register');
        $this->load->model('User');
    }

    public function index()
    {
      if ($this->session->userdata('masuk')){
        redirect('Dashboard','refresh');
      }
      $this->laman('v_login');
    }

    public function login(){
        $uname = $this->input->post('uname');
        $pass = $this->input->post('pass');
        $log = $this->User->verify($uname,$pass);
        if ($log->num_rows()>0){
            $this->session->set_userdata('masuk',TRUE);
		        $this->session->set_userdata('username',$uname);
				    $role = $log->row_array();
				    if ($role['jabatan']=='laboratorium') {
  		         $this->session->set_userdata('akses', 'Laborat');
  		         $nama = $role['nama'];
  		         $this->session->set_userdata('nama',$nama);
  		         $Id = $role['Id'];
  		         $this->session->set_userdata('Id',$Id);
				     }
    				else if ($role['jabatan']=='radiologi') {
      					$this->session->set_userdata('akses', 'Radio');
      					$nama = $role['nama'];
      					$this->session->set_userdata('nama',$nama);
    				}
    				else if ($role['jabatan']=='medical'){
      					$this->session->set_userdata('akses', 'Medical');
      					$nama = $role['nama'];
      					$this->session->set_userdata('nama',$nama);
    				}
            redirect('Dashboard','refresh');
            }
          redirect('Utama');
    }

    public function reg(){
        $this->Register->awal();
    }
}
