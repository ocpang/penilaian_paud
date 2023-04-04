<?php

class Administrator extends CI_Controller {

	// Constuctor
	public function __construct(){
		parent::__construct();
		$this->load->model('admin_m');
	}

	public function index(){
		if(empty($this->session->userdata('aid')) && empty($this->session->userdata('anama')) && empty($this->session->userdata('ausername')) && empty($this->session->userdata('apassword')) && empty($this->session->userdata('astatus'))){
//		if($this->session->userdata('aid') == "" && $this->session->userdata('anama') == ""  && $this->session->userdata('ausername') == "" && $this->session->userdata('apassword') == ""  && $this->session->userdata('astatus') == "" ){

			$this->load->view("alogin_v");
		}
		else {
			redirect(base_url().'aberanda');
		}
	}
	
	public function login(){
		$this->admin_m->set_username(strtolower($this->input->post('nama')));		// $_POST['username']
		$this->admin_m->set_password(md5(strtolower($this->input->post('sandi'))));		
			
		$query = $this->admin_m->view_pengguna_by_username_pass();	// mysql_query("");
				
		if($query->num_rows() > 0){		// mysql_num_rows();
			$row = $query->row();	// eq: fetch object
			$this->session->set_userdata('aid',$row->idadmin);
			$this->session->set_userdata('anama',$row->nama);
			$this->session->set_userdata('ausername',$row->idlogin);
			$this->session->set_userdata('apassword',$row->password);
			$this->session->set_userdata('astatus',$row->status);
			$this->admin_m->updatetimelogin();
			redirect(base_url().'aberanda');	# redirect(site_url());
		}
		else {
			$data["status"] = "error";
			$this->load->view("alogin_v", $data);
		}					
	}
		
	public function logout(){
		$this->admin_m->updatetimelogout();
		$this->session->unset_userdata('aid');
		$this->session->unset_userdata('anama');
		$this->session->unset_userdata('ausername');
		$this->session->unset_userdata('apassword');
		$this->session->unset_userdata('astatus');

//		$this->session->sess_destroy();
		redirect(base_url().'administrator');
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */