<?php
	class Kontak_M extends CI_Model {
		
		public function insert($nama, $email, $pesan)
		{
			$sql = "INSERT INTO tbl_pesan VALUES ('','". $nama ."','".$email."','".$pesan."','Belum Dibaca')";
					
			$this->db->query($sql);
		}
		
	}
?>