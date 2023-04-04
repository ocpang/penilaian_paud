<?PHP
	class Anak_M extends CI_Model {
	
		//Method
		
		public function view_by_noinduk_password($noinduk,$password)
		{
			$sql = "SELECT * FROM tbl_anak WHERE noinduk=".$noinduk." AND password='".$password."'";
			
			return $this->db->query($sql);
		}
		
	}
?>