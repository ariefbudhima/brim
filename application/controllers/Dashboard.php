<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends APT_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Transaksi');
		$this->load->model('Beli');
	}

	public function index()
	{
		if (!$this->session->userdata("masuk")){
            redirect("/");
        }
        $data = NULL;

		$this->laman('laman/v_dashboard',$data);
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('/','refresh');
	}


}
