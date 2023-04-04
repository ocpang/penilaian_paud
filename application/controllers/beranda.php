<?PHP
	class Beranda extends CI_Controller
	{
		//Constructor
		
		public function __construct() {
			parent::__construct();
			
			//Model
			$this->load->model('anak_m');
			$this->load->model('kontak_m');
		}
		
		//Index
		
		public function index() {
			$this->load->view('beranda_v');
		}
		
		public function login()
		{			
			$query = $this->anak_m->view_by_noinduk_password($this->input->post('noinduk'), md5(strtolower($this->input->post('password'))));
			if($query->num_rows() > 0)
			{
				$row = $query->row();
				
				$this->session->set_userdata('noinduk', $row->noinduk);
				$this->session->set_userdata('nama', $row->namalengkap);
				redirect(base_url().'nilaianak');
			}			
			else{
				$data["status"] = "gagallogin";
				$this->load->view("beranda_v", $data);
			}
		}
		
		public function logout()
		{
			$this->session->unset_userdata('noinduk');
			$this->session->unset_userdata('nama');
			redirect(site_url());
		}

		public function pesan()
		{
			$this->kontak_m->insert($this->input->post('nama'), $this->input->post('email'), $this->input->post('pesan'));
	
			redirect(site_url());
		}	
	
	}
?>