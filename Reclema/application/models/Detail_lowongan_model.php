<?php
class Detail_lowongan_model extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
	
	function caridata($id_lowongan){
		$sqlstr="select * from lowongan where id_lowongan='".$id_lowongan."'";
		$hslquery=$this->db->query($sqlstr);
		return $hslquery;
	}
}
?>
