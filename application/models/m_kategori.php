<?php



class M_Kategori extends CI_Model{

	function lihat(){

		return $this->db->get('kategori')->result();
	}

	function input($dt){
		$this->db->insert('kategori',array('kategori'=>$dt));
	}

	function edit($id){
		$this->db->where('id_kategori',$id);
		return $this->db->get('kategori')->result();
	}

	function hapus($id){
		$this->db->where('id_kategori',$id);
		$this->db->delete('kategori');
	}

	function update($data,$id){
		$this->db->where($id);
		$this->db->update('kategori',$data);
	}
	
}