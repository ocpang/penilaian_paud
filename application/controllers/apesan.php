<?php

class Apesan extends CI_Controller {

		// Constuctor
		public function __construct(){
			parent::__construct();
			$this->load->model('apesan_m');
		}
	
		public function index(){
			if(empty($this->session->userdata('aid')) && empty($this->session->userdata('anama')) && 
				empty($this->session->userdata('username')) && empty($this->session->userdata('apassword')) && 
				  empty($this->session->userdata('astatus'))){
				redirect(base_url().'administrator');
			}
			else {
				$this->load->view('apesan_v');
			}
		}

		
		public function update(){
			$this->apesan_m->update($this->input->post('idpesan'));
			redirect(base_url().'apesan');
		}

		public function delete()
		{	
			$this->apesan_m->delete($this->input->post("idpesan"));
			redirect(base_url().'apesan');
		}
				
		public function delete_all()
		{
			$this->apesan_m->delete_all();
			redirect(base_url().'apesan');
		}

		public function export()
		{
			if($this->uri->segment(3) == "excel"){
				header('Content-Type: application/ms-excel'); // msword   atau  yms-excel
				header('Content-Disposition: attachment; filename="Daftar Pesan di PAUD Flamboyan 1.xls"');
				
				$this->load->view('apesan_export_v');
			}
			else if($this->uri->segment(3) == "pdf"){
				$this->load->library('tcpdf');
				$this->load->library('parser');
				$pdf = new tcpdf();
				
				$orientation = 'L';
				$format = 'A4';
				$keepmargins = false;
				$tocpage = false;
				
				$pdf->AddPage($orientation, $format, $keepmargins, $tocpage);
				
				$family = "dejavusans";
				$style = "";
				$size = "11";
				
				$pdf->SetFont($family, $style, $size);
				
				$html = $this->parser->parse('apesan_export_v', array());
				$ln = true;
				$fill = false;
				$reseth = false;
				$cell = false;
				$align = "";
				
				$pdf->WriteHTML($html, $ln, $fill, $reseth, $cell, $align);
				$pdf->output();
	
			}			
		}	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */