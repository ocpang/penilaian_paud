<?php

class Aanakdidik extends CI_Controller {

		// Constuctor
		public function __construct(){
			parent::__construct();
			$this->load->model('apesan_m');
			$this->load->model('aanakdidik_m');
		}
	
		public function index(){
			if(empty($this->session->userdata('aid')) && empty($this->session->userdata('anama')) && empty($this->session->userdata('ausername')) && empty($this->session->userdata('apassword')) && empty($this->session->userdata('astatus'))){
				redirect(base_url().'administrator');
			}
			else {
				$this->load->view('aanakdidik_v');
			}
		}

		public function save()
		{
			if(strtolower($this->input->post('password')) == strtolower($this->input->post('konfpassword'))){				
				$query = $this->aanakdidik_m->viewnoinduk($this->input->post('noinduk'));
				if(!$query->num_rows()){					
					$this->aanakdidik_m->insert($this->input->post('noinduk'),$this->input->post('namalengkap'),$this->input->post('tempatlahir'),$this->input->post('tgllahir'),$this->input->post('agama'),$this->input->post('statusanak'),$this->input->post('namaayah'),$this->input->post('namaibu'),$this->input->post('namawali'),md5(strtolower($this->input->post('password'))));
					redirect(base_url().'aanakdidik');

					$data["status"] = "berhasil";
					$this->load->view("aanakdidik_v", $data);
				}							
			}
			else {
				$data["status"] = "error_save";
				$this->load->view("aanakdidik_v", $data);
			}			
		}
		
		public function update(){
			if(strtolower($this->input->post('password')) == strtolower($this->input->post('konfpassword'))){				
				$this->aanakdidik_m->update($this->input->post('noinduk_tmp'),$this->input->post('namalengkap'),$this->input->post('tempatlahir'),$this->input->post('tgllahir'),$this->input->post('agama'),$this->input->post('statusanak'),$this->input->post('namaayah'),$this->input->post('namaibu'),$this->input->post('namawali'),md5(strtolower($this->input->post('password'))));

				$data["status"] = "berhasil";
				$this->load->view("aanakdidik_v", $data);
			}
			else {
				$data["status"] = "notsame";
				$this->load->view("aanakdidik_v", $data);
			}			
		}

		public function delete()
		{	
			
			$this->aanakdidik_m->delete($this->input->post("noinduk"));
			redirect(base_url().'aanakdidik');
		}
				
		public function export()
		{
			if($this->uri->segment(3) == "excel"){
				header('Content-Type: application/ms-excel'); // msword   atau  yms-excel
				header('Content-Disposition: attachment; filename="Daftar Anak Didik.xls"');
				
				$this->load->view('aanakdidik_export_v');
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
				
				$html = $this->parser->parse('aanakdidik_export_v', array());
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