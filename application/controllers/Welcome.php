<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller{

	function __construct(){
		parent::__construct();				
		$this->load->model('m_login');
		$this->load->model('m_buku');

	}

	function index(){	

		if(isset($_POST['cari'])){
			$cari=$this->input->post('cari');
			$data['buku'] = $this->m_buku->cari($cari);

		}else{

			$data['buku'] = $this->m_buku->lihat();
		}

		$this->template->load('template_welcome','v_welcome',$data);
	}
	function login(){	
		sudah_login();	
		$this->template->load('template_welcome','v_login');
	}
	function login_act(){
		$data=array(
			'username' => $this->input->post('username'),
			'password' => do_hash($this->input->post('password'),'md5')
			);
		
		$cek = $this->m_login->cek($data);

		if($cek > 0){
			$this->session->set_userdata(array('status' => 'login','username'=>$data['username']));
			redirect('perpus');
		}else{
			redirect('welcome/login/salah');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		$this->session->unset_userdata('username');
		redirect('welcome');
	}
	function detail_buku($id){
		$data['buku']=$this->m_buku->detail($id);
		$this->template->load('template_welcome','v_detail_buku',$data);

	}

}