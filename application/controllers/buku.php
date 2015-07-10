<?php

class Buku extends CI_Controller{

	function __construct(){
		parent::__construct();
		cek_login();
		$this->load->model('m_buku');
		$this->load->model('m_kategori');
	}

	function index(){

		if(isset($_POST['cari'])){
			$cari=$this->input->post('cari');
			$data['buku'] = $this->m_buku->cari($cari);

		}else if(isset($_POST['filter'])){
			
			$kategori= $this->input->post('fil_kategori');
			
			$data['buku'] = $this->m_buku->filter($kategori);

		}
		else{

			$data['buku'] = $this->m_buku->lihat();
		}

		$data['f_kategori'] = $this->m_buku->f_kategori();
		$this->template->load('template','v_buku',$data);
		
	}
	function tambah(){
		$dt['kategori']=$this->m_kategori->lihat();
		$this->template->load('template','v_tambah_buku',$dt);
	}

	function do_upload(){
		$config['upload_path'] = './sampul/';
		$config['allowed_types'] = 'gif|jpg|png';
		

		$this->load->library('upload', $config);

		// upload gambar
		$this->upload->do_upload('sampul_buku');
		$upload = array('upload_data' => $this->upload->data());
		
		$data['judul_buku']		=	$this->input->post('judul_buku');
		$data['penulis_buku']	=	$this->input->post('penulis_buku');
		$data['penerbit_buku']	=	$this->input->post('penerbit_buku');
		$data['tahun_buku']		=	$this->input->post('tahun_buku');
		$data['kategori_buku']	=	$this->input->post('kategori_buku');
		$data['sampul_buku']	=	$upload['upload_data']['file_name'];

		$this->m_buku->input($data);
		redirect('buku');
		
	}
	function hapus($id){

		$this->m_buku->hapus($id);
		redirect('buku');

	}
	function edit($id){
		$data['buku']=$this->m_buku->edit($id);
		$data['kategori']=$this->m_kategori->lihat();

		$this->template->load('template','v_edit_buku',$data);

	}
	function update(){
		$config['upload_path'] = './sampul/';
		$config['allowed_types'] = 'gif|jpg|png';
		

		$this->load->library('upload', $config);

		// upload gambar
		$this->upload->do_upload('sampul_buku');
		$upload = array('upload_data' => $this->upload->data());
		
		$id=$this->input->post('id_buku');
		$data['judul_buku']		=	$this->input->post('judul_buku');
		$data['penulis_buku']	=	$this->input->post('penulis_buku');
		$data['penerbit_buku']	=	$this->input->post('penerbit_buku');
		$data['tahun_buku']		=	$this->input->post('tahun_buku');
		$data['kategori_buku']	=	$this->input->post('kategori_buku');
		$data['sampul_buku']	=	$upload['upload_data']['file_name'];

		$this->m_buku->update($data,$id);
		redirect('buku');
		
	}

	
	function detail($id){

		$detail['detail']=$this->m_buku->detail($id);
		$this->template->load('template','v_detail',$detail);

	}

	
}

?>