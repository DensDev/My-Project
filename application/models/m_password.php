<?php

class M_password extends CI_Model{

	function update($pass_baru){
		
		$this->db->update('admin',$pass_baru);

	}

}