<?PHP
	class Nilai_M extends CI_Model {
		//Method
		
		public function view_by_noinduk_password($noinduk,$password)
		{
			$sql = "SELECT * FROM tbl_anak 
					WHERE noinduk='".$noinduk."' AND 
					password='".$password."'";
			
			return $this->db->query($sql);
		}
		
		public function viewnilaiagama($noinduk)
		{
			$sql = "SELECT * FROM (tbl_nilaiagama as a INNER JOIN tbl_penilaian as p ON a.idpenilaian = p.idpenilaian) INNER JOIN tbl_kategorinilai as k ON p.idkategorinilai= k.idkategorinilai WHERE a.noinduk=$noinduk";
			
			return $this->db->query($sql);
		}
		
		public function viewchartagama($noinduk)
		{
			$sql = "SELECT n.nilai, count(n.nilai) as total FROM tbl_nilaiagama as n INNER JOIN tbl_penilaian as p ON n.idpenilaian = p.idpenilaian WHERE n.noinduk = ". $noinduk ." GROUP BY n.nilai";
			
			return $this->db->query($sql);
		}

		public function insertnilaiagama($noinduk,$penilaian,$nilai,$keterangan)
		{
			$sql = "INSERT INTO tbl_nilaiagama VALUES ('',$noinduk,'$penilaian',$nilai,$keterangan)";			
		}
		
		public function viewnilaifisik($noinduk)
		{
			$sql = "SELECT * FROM (tbl_nilaifisik as a INNER JOIN tbl_penilaian as p ON a.idpenilaian = p.idpenilaian) INNER JOIN tbl_kategorinilai as k ON p.idkategorinilai= k.idkategorinilai WHERE a.noinduk=".$noinduk;
			
			return $this->db->query($sql);
		}
		public function viewchartfisik($noinduk)
		{
			$sql = "SELECT n.nilai, count(n.nilai) as total FROM tbl_nilaifisik as n INNER JOIN tbl_penilaian as p ON n.idpenilaian = p.idpenilaian WHERE n.noinduk = ". $noinduk ." GROUP BY n.nilai";
			
			return $this->db->query($sql);
		}
		
		public function viewnilaikonsep($noinduk)
		{
			$sql = "SELECT * FROM (tbl_nilaifisik as a INNER JOIN tbl_penilaian as p ON a.idpenilaian = p.idpenilaian) INNER JOIN tbl_kategorinilai as k ON p.idkategorinilai= k.idkategorinilai WHERE a.noinduk=".$noinduk;
			
			return $this->db->query($sql);
		}
		
		public function viewchartkonsep($noinduk)
		{
			$sql = "SELECT n.nilai, count(n.nilai) as total FROM tbl_nilaikonsep as n INNER JOIN tbl_penilaian as p ON n.idpenilaian = p.idpenilaian WHERE n.noinduk = ". $noinduk ." GROUP BY n.nilai";
			
			return $this->db->query($sql);
		}
		
		public function viewnilaipengetahuan($noinduk)
		{
			$sql = "SELECT * FROM (tbl_nilaipengetahuan as a INNER JOIN tbl_penilaian as p ON a.idpenilaian = p.idpenilaian) INNER JOIN tbl_kategorinilai as k ON p.idkategorinilai= k.idkategorinilai WHERE a.noinduk=".$noinduk;
			
			return $this->db->query($sql);
		}
		public function viewchartpengetahuan($noinduk)
		{
			$sql = "SELECT n.nilai, count(n.nilai) as total FROM tbl_nilaipengetahuan as n INNER JOIN tbl_penilaian as p ON n.idpenilaian = p.idpenilaian WHERE n.noinduk = ". $noinduk ." GROUP BY n.nilai";
			
			return $this->db->query($sql);
		}
		public function viewnilaibahasa($noinduk)
		{
			$sql = "SELECT * FROM (tbl_nilaibahasa as a INNER JOIN tbl_penilaian as p ON a.idpenilaian = p.idpenilaian) INNER JOIN tbl_kategorinilai as k ON p.idkategorinilai= k.idkategorinilai WHERE a.noinduk=".$noinduk;
			
			return $this->db->query($sql);
		}
		public function viewchartbahasa($noinduk)
		{
			$sql = "SELECT n.nilai, count(n.nilai) as total FROM tbl_nilaibahasa as n INNER JOIN tbl_penilaian as p ON n.idpenilaian = p.idpenilaian WHERE n.noinduk = ". $noinduk ." GROUP BY n.nilai";
			
			return $this->db->query($sql);
		}
		public function viewnilaisosial($noinduk)
		{
			$sql = "SELECT * FROM (tbl_nilaisosial as a INNER JOIN tbl_penilaian as p ON a.idpenilaian = p.idpenilaian) INNER JOIN tbl_kategorinilai as k ON p.idkategorinilai= k.idkategorinilai WHERE a.noinduk=".$noinduk;
			
			return $this->db->query($sql);
		}
		public function viewchartsosial($noinduk)
		{
			$sql = "SELECT n.nilai, count(n.nilai) as total FROM tbl_nilaisosial as n INNER JOIN tbl_penilaian as p ON n.idpenilaian = p.idpenilaian WHERE n.noinduk = ". $noinduk ." GROUP BY n.nilai";
			
			return $this->db->query($sql);
		}
	}
?>