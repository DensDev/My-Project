<?php



class M_buku extends CI_Model{

	function lihat(){
		$query='select buku.*, kategori.* from kategori,buku where buku.kategori_buku=kategori.id_kategori';
		return $this->db->query($query)->result();
		
		
	}
	function input($data){
		$this->db->insert('buku',$data);
	}

	function hapus($id){
		$this->db->where('id_buku',$id);
		$this->db->delete('buku');
	}
	function edit($id){
		$this->db->where('id_buku',$id);
		return $this->db->get('buku')->result();
	}
	function update($data,$id){
		$this->db->where('id_buku',$id);
		$this->db->update('buku',$data);
	}
	function f_penulis(){
		$query="select * from view_buku group by penulis_buku";
		return $this->db->query($query)->result();
	}
	function f_penerbit(){
		$query="select distinct penerbit_buku from buku";
		return $this->db->query($query)->result();
	}

	function f_kategori(){
		$query="select distinct kategori from view_buku";
		return $this->db->query($query)->result();
	}

	function cari($cari){
		$yang_dicari=array('judul_buku'=>$cari,'penerbit_buku'=>$cari,'penulis_buku'=>$cari,'tahun_buku'=>$cari);

		$this->db->or_like($yang_dicari);

		return $this->db->get('view_buku')->result();

	}
	function filter($kategori){
		$this->db->where('kategori',$kategori);
		return $this->db->get('view_buku')->result();
	}
	function detail($id){
		$this->db->where('id_buku',$id);
		return $this->db->get('view_buku')->result();
	}
}