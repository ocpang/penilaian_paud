<?php
	class Aanakdidik_m extends CI_Model {
		
		public function view(){
			$query = "SELECT * FROM tbl_anak ORDER BY noinduk";
			return $this->db->query($query);
		}
		
		public function viewnoinduk($noinduk){
			$query = "SELECT * FROM tbl_anak WHERE noinduk=". $noinduk;
			return $this->db->query($query);
		}

		public function insert($noinduk,$namalengkap,$tempatlahir,$tgllahir,$agama,$statusanak,$namaayah,$namaibu,$namawali,$password)
		{
			$sql = "INSERT INTO tbl_anak VALUES (
			".$noinduk.",
			'".$namalengkap."',
			'".$tempatlahir."',
			'".$tgllahir."',
			'".$agama."',
			'".$statusanak."',
			'".$namaayah."',
			'".$namaibu."',
			'".$namawali."',
			'".$password."'
			)";
					
			$this->db->query($sql);
		}

		public function update($noinduk,$namalengkap,$tempatlahir,$tgllahir,$agama,$statusanak,$namaayah,$namaibu,$namawali,$password)
		{
			$sql = "UPDATE tbl_anak SET 
			namalengkap='".$namalengkap."', 
			tempatlahir='".$tempatlahir."',
			tgllahir='".$tgllahir."',
			agama='".$agama."', 
			statusanak='".$statusanak."',
			namaayah='".$namaayah."',
			namaibu='".$namaibu."', 
			namawali='".$namawali."',
			password='".$password."'
			WHERE noinduk=".$noinduk;

			$this->db->query($sql);
		}

		public function delete($noinduk)
		{
			$sql = "DELETE FROM tbl_anak WHERE noinduk=".$noinduk;
					
			$this->db->query($sql);
		}
	}
?>