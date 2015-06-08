<?php
	class Apenilaian_M extends CI_Model {
	
		// Method	
		public function view(){
			$query = "SELECT * FROM tbl_penilaian as p INNER JOIN tbl_kategorinilai as k ON p.idkategorinilai = k.idkategorinilai ORDER BY k.namakategori";
			return $this->db->query($query);
		}
		
		public function viewallnilaiagama()
		{
			$sql = "SELECT * FROM (tbl_nilaiagama as a INNER JOIN tbl_penilaian as p ON a.idpenilaian = p.idpenilaian) INNER JOIN tbl_kategorinilai as k ON p.idkategorinilai= k.idkategorinilai";
			
			return $this->db->query($sql);
		}
		
		public function viewnilaiagama(){
			$query = "SELECT * FROM tbl_penilaian as p INNER JOIN tbl_kategorinilai as k ON p.idkategorinilai = k.idkategorinilai WHERE p.idkategorinilai = 1 ORDER BY k.namakategori";
			return $this->db->query($query);
		}

		public function insertnilaiagama($noinduk, $penilaian, $nilai, $keterangan)
		{
			$sql = "INSERT INTO tbl_nilaiagama VALUES ('',".$noinduk.",'".$penilaian."','".$nilai."','".$keterangan."')";
					
			$this->db->query($sql);
		}
		
		public function updatenilaiagama($idnilaiagama, $penilaian, $nilai, $keterangan)
		{
			$sql = "UPDATE tbl_nilaiagama SET idpenilaian=".$penilaian.", nilai='".$nilai."', keterangan='".$keterangan."' WHERE idnilaiagama=".$idnilaiagama;
			$this->db->query($sql);
		}

		public function deletenilaiagama($idnilaiagama)
		{
			$sql = "DELETE FROM tbl_nilaiagama WHERE idnilaiagama=".$idnilaiagama;
			$this->db->query($sql);
		}
		
		public function viewallnilaibahasa()
		{
			$sql = "SELECT * FROM (tbl_nilaibahasa as a INNER JOIN tbl_penilaian as p ON a.idpenilaian = p.idpenilaian) INNER JOIN tbl_kategorinilai as k ON p.idkategorinilai= k.idkategorinilai";
			
			return $this->db->query($sql);
		}
		
		public function viewnilaibahasa(){
			$query = "SELECT * FROM tbl_penilaian as p INNER JOIN tbl_kategorinilai as k ON p.idkategorinilai = k.idkategorinilai WHERE p.idkategorinilai = 2 ORDER BY k.namakategori";
			return $this->db->query($query);
		}

		public function insertnilaibahasa($noinduk, $penilaian, $nilai, $keterangan)
		{
			$sql = "INSERT INTO tbl_nilaibahasa VALUES ('',".$noinduk.",'".$penilaian."','".$nilai."','".$keterangan."')";
					
			$this->db->query($sql);
		}
		
		public function updatenilaibahasa($idnilaibahasa, $penilaian, $nilai, $keterangan)
		{
			$sql = "UPDATE tbl_nilaibahasa SET idpenilaian=".$penilaian.", nilai='".$nilai."', keterangan='".$keterangan."' WHERE idnilaibahasa=".$idnilaibahasa;
			$this->db->query($sql);
		}

		public function deletenilaibahasa($idnilaibahasa)
		{
			$sql = "DELETE FROM tbl_nilaibahasa WHERE idnilaibahasa=".$idnilaibahasa;
			$this->db->query($sql);
		}


		public function viewallnilaifisik()
		{
			$sql = "SELECT * FROM (tbl_nilaifisik as a INNER JOIN tbl_penilaian as p ON a.idpenilaian = p.idpenilaian) INNER JOIN tbl_kategorinilai as k ON p.idkategorinilai= k.idkategorinilai";
			
			return $this->db->query($sql);
		}
		
		public function viewnilaifisik(){
			$query = "SELECT * FROM tbl_penilaian as p INNER JOIN tbl_kategorinilai as k ON p.idkategorinilai = k.idkategorinilai WHERE p.idkategorinilai = 3 ORDER BY k.namakategori";
			return $this->db->query($query);
		}

		public function insertnilaifisik($noinduk, $penilaian, $nilai, $keterangan)
		{
			$sql = "INSERT INTO tbl_nilaifisik VALUES ('',".$noinduk.",'".$penilaian."','".$nilai."','".$keterangan."')";
					
			$this->db->query($sql);
		}
		
		public function updatenilaifisik($idnilaifisik, $penilaian, $nilai, $keterangan)
		{
			$sql = "UPDATE tbl_nilaifisik SET idpenilaian=".$penilaian.", nilai='".$nilai."', keterangan='".$keterangan."' WHERE idnilaifisik=".$idnilaifisik;
			$this->db->query($sql);
		}

		public function deletenilaifisik($idnilaifisik)
		{
			$sql = "DELETE FROM tbl_nilaifisik WHERE idnilaifisik=".$idnilaifisik;
			$this->db->query($sql);
		}
	
		public function viewallnilaikonsep()
		{
			$sql = "SELECT * FROM (tbl_nilaikonsep as a INNER JOIN tbl_penilaian as p ON a.idpenilaian = p.idpenilaian) INNER JOIN tbl_kategorinilai as k ON p.idkategorinilai= k.idkategorinilai";
			
			return $this->db->query($sql);
		}
		
		public function viewnilaikonsep(){
			$query = "SELECT * FROM tbl_penilaian as p INNER JOIN tbl_kategorinilai as k ON p.idkategorinilai = k.idkategorinilai WHERE p.idkategorinilai = 4 ORDER BY k.namakategori";
			return $this->db->query($query);
		}

		public function insertnilaikonsep($noinduk, $penilaian, $nilai, $keterangan)
		{
			$sql = "INSERT INTO tbl_nilaikonsep VALUES ('',".$noinduk.",'".$penilaian."','".$nilai."','".$keterangan."')";
					
			$this->db->query($sql);
		}
		
		public function updatenilaikonsep($idnilaikonsep, $penilaian, $nilai, $keterangan)
		{
			$sql = "UPDATE tbl_nilaikonsep SET idpenilaian=".$penilaian.", nilai='".$nilai."', keterangan='".$keterangan."' WHERE idnilaikonsep=".$idnilaikonsep;
			$this->db->query($sql);
		}

		public function deletenilaikonsep($idnilaikonsep)
		{
			$sql = "DELETE FROM tbl_nilaikonsep WHERE idnilaikonsep=".$idnilaikonsep;
			$this->db->query($sql);
		}


		public function viewallnilaipengetahuan()
		{
			$sql = "SELECT * FROM (tbl_nilaipengetahuan as a INNER JOIN tbl_penilaian as p ON a.idpenilaian = p.idpenilaian) INNER JOIN tbl_kategorinilai as k ON p.idkategorinilai= k.idkategorinilai";
			
			return $this->db->query($sql);
		}
		
		public function viewnilaipengetahuan(){
			$query = "SELECT * FROM tbl_penilaian as p INNER JOIN tbl_kategorinilai as k ON p.idkategorinilai = k.idkategorinilai WHERE p.idkategorinilai = 5 ORDER BY k.namakategori";
			return $this->db->query($query);
		}

		public function insertnilaipengetahuan($noinduk, $penilaian, $nilai, $keterangan)
		{
			$sql = "INSERT INTO tbl_nilaipengetahuan VALUES ('',".$noinduk.",'".$penilaian."','".$nilai."','".$keterangan."')";
					
			$this->db->query($sql);
		}
		
		public function updatenilaipengetahuan($idnilaipengetahuan, $penilaian, $nilai, $keterangan)
		{
			$sql = "UPDATE tbl_nilaipengetahuan SET idpenilaian=".$penilaian.", nilai='".$nilai."', keterangan='".$keterangan."' WHERE idnilaipengetahuan=".$idnilaipengetahuan;
			$this->db->query($sql);
		}

		public function deletenilaipengetahuan($idnilaipengetahuan)
		{
			$sql = "DELETE FROM tbl_nilaipengetahuan WHERE idnilaipengetahuan=".$idnilaipengetahuan;
			$this->db->query($sql);
		}
		
		
				public function viewallnilaisosial()
		{
			$sql = "SELECT * FROM (tbl_nilaisosial as a INNER JOIN tbl_penilaian as p ON a.idpenilaian = p.idpenilaian) INNER JOIN tbl_kategorinilai as k ON p.idkategorinilai= k.idkategorinilai";
			
			return $this->db->query($sql);
		}
		
		public function viewnilaisosial(){
			$query = "SELECT * FROM tbl_penilaian as p INNER JOIN tbl_kategorinilai as k ON p.idkategorinilai = k.idkategorinilai WHERE p.idkategorinilai = 6 ORDER BY k.namakategori";
			return $this->db->query($query);
		}

		public function insertnilaisosial($noinduk, $penilaian, $nilai, $keterangan)
		{
			$sql = "INSERT INTO tbl_nilaisosial VALUES ('',".$noinduk.",'".$penilaian."','".$nilai."','".$keterangan."')";
					
			$this->db->query($sql);
		}
		
		public function updatenilaisosial($idnilaisosial, $penilaian, $nilai, $keterangan)
		{
			$sql = "UPDATE tbl_nilaisosial SET idpenilaian=".$penilaian.", nilai='".$nilai."', keterangan='".$keterangan."' WHERE idnilaisosial=".$idnilaisosial;
			$this->db->query($sql);
		}

		public function deletenilaisosial($idnilaisosial)
		{
			$sql = "DELETE FROM tbl_nilaisosial WHERE idnilaisosial=".$idnilaisosial;
			$this->db->query($sql);
		}
		

		public function insert($kategori, $penilaian)
		{
			$sql = "INSERT INTO tbl_penilaian VALUES ('',".$kategori.",'".$penilaian."')";
					
			$this->db->query($sql);
		}

		public function update($idpenilaian, $kategori, $penilaian)
		{
			$sql = "UPDATE tbl_penilaian SET idkategorinilai=".$kategori.", penilaian='".$penilaian."' WHERE idpenilaian=".$idpenilaian;
					
			$this->db->query($sql);
		}

		public function delete($idpenilaian)
		{
			$sql = "DELETE FROM tbl_penilaian WHERE idpenilaian=".$idpenilaian;
					
			$this->db->query($sql);
		}

		public function delete_all()
		{
			$sql = "TRUNCATE TABLE tbl_penilaian";
			
			$this->db->query($sql);
		}
		
	}
?>