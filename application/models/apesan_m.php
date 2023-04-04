<?php
	class Apesan_M extends CI_Model {
	
		// Method	
		public function view(){
			$query = "SELECT * FROM tbl_pesan ORDER BY nama";
			return $this->db->query($query);
		}

		public function jumlahpesanbaru(){
			$query = "SELECT * FROM tbl_pesan WHERE status='Belum Dibaca'";
			return $this->db->query($query);
		}

		public function update($idpesan)
		{
			$sql = "UPDATE tbl_pesan SET status='Dibaca' WHERE idpesan=".$idpesan;
					
			$this->db->query($sql);
		}

		public function delete($idpesan)
		{
			$sql = "DELETE FROM tbl_pesan WHERE idpesan=".$idpesan;
					
			$this->db->query($sql);
		}

		public function delete_all()
		{
			$sql = "TRUNCATE TABLE tbl_pesan";
			
			$this->db->query($sql);
		}
		
	}
?>