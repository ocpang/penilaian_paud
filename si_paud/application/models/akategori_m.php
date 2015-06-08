<?php
	class Akategori_M extends CI_Model {
	
		// Method	
		public function view(){
			$query = "SELECT * FROM tbl_kategorinilai ORDER BY namakategori";
			return $this->db->query($query);
		}
		
		public function insert($kategori)
		{
			$sql = "INSERT INTO tbl_kategorinilai VALUES ('','".$kategori."')";
					
			$this->db->query($sql);
		}

		public function update($idkategori, $kategori)
		{
			$sql = "UPDATE tbl_kategorinilai SET namakategori='".$kategori."' WHERE idkategorinilai=".$idkategori;
					
			$this->db->query($sql);
		}

		public function delete($idkategori)
		{
			$sql = "DELETE FROM tbl_kategorinilai WHERE idkategorinilai=".$idkategori;
					
			$this->db->query($sql);
		}

		public function delete_all()
		{
			$sql = "TRUNCATE TABLE tbl_kategorinilai";
			
			$this->db->query($sql);
		}
		
	}
?>