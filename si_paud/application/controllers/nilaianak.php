<?PHP
	class Nilaianak extends CI_Controller
	{
		//Constructor
		
		public function __construct() {
			parent::__construct();
			
			//Model
			$this->load->model('anak_m');
			$this->load->model('nilai_m');
		//	$this->load->model('apenilaian_m');
		}
		
		//Index
		
		public function index() {
			if($this->session->userdata('nama') == ""){
				redirect(base_url());
			}
			else {
				$this->load->view('nilaianak_v');
			}
		}
		
	}
?>