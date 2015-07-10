<?php

class M_login extends CI_Model{


	function cek($data){
		$dt=$this->db->get_where('admin',$data);
		return $dt->num_rows();
	}
}

?>