<?php

class Anilaisosial extends CI_Controller {

		// Constuctor
		public function __construct(){
			parent::__construct();
			$this->load->model('apesan_m');
			$this->load->model('apenilaian_m');
		}
	
		public function index(){
			if(empty($this->session->userdata('aid')) && empty($this->session->userdata('anama')) && 
				empty($this->session->userdata('username')) && empty($this->session->userdata('apassword')) && 
				  empty($this->session->userdata('astatus'))){
				redirect(base_url().'administrator');
			}
			else {
				$this->load->view('anilaisosial_v');
			}
		}

		public function save()
		{
			$this->apenilaian_m->insertnilaisosial($this->input->post('noinduk'), $this->input->post('penilaian'),$this->input->post('nilai'),$this->input->post('keterangan'));
			redirect(base_url().'anilaisosial');
		}

		public function update()
		{
			$this->apenilaian_m->updatenilaisosial($this->input->post('idnilaisosial_tmp'),$this->input->post('penilaian'),$this->input->post('nilai'),$this->input->post('keterangan'));
			redirect(base_url().'anilaisosial');
		}

		public function delete()
		{	
			$this->apenilaian_m->deletenilaisosial($this->input->post("idnilaisosial"));
			redirect(base_url().'anilaisosial');
		}
		public function export()
		{
			if($this->uri->segment(3) == "excel"){
				header('Content-Type: application/ms-excel'); // msword   atau  yms-excel
				header('Content-Disposition: attachment; filename="Daftar Nilai Sosial Emosional.xls"');
				
				$this->load->view('anilaisosial_export_v');
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
				
				$html = $this->parser->parse('anilaisosial_export_v', array());
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