<?php

class Kategori extends CI_Controller{

	function __construct(){
		parent::__construct();
		cek_login();
		$this->load->model('m_kategori');
	}

	function index(){
		$data['kategori'] = $this->m_kategori->lihat();
		$this->template->load('template','v_kategori',$data);
	}	
	function input(){
		$dt=$this->input->post('kategori');
		$this->m_kategori->input($dt);
		redirect('kategori');
	}
	function edit($id){
		$data['edit']=$this->m_kategori->edit($id);
		$data['kategori'] = $this->m_kategori->lihat();
		$this->template->load('template','v_kategori',$data);	
	}
	function update(){
		$id['id_kategori']=$this->input->post('id_kategori');
		$data['kategori']=$this->input->post('kategori');

		$this->m_kategori->update($data,$id);
		redirect('kategori');
	}
	function hapus($id){
		$this->m_kategori->hapus($id);
		redirect('kategori');
	}
}

?>