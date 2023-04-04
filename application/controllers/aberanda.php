<?php

class Aberanda extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('apesan_m');
	}

	public function index(){
		if(empty($this->session->userdata('anama')) && empty($this->session->userdata('ausername')) && 
			empty($this->session->userdata('apassword')) && empty($this->session->userdata('astatus'))){
			redirect(base_url().'administrator');
		}
		else {
			$this->load->view('aberanda_v');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */