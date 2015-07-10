<?php

class Password extends CI_Controller{

	function __construct(){
		parent::__construct();
		cek_login();
		$this->load->model('m_password');
	}

	function index(){
		$this->template->load('template','v_password');
	}
	function update(){
		$pass_baru=$this->input->post('pass_baru');
		$pass_ulang=$this->input->post('pass_ulang');


		if($pass_baru==$pass_ulang){
			$pass=array('password'=>md5($this->input->post('pass_ulang')));
			$this->m_password->update($pass);
			redirect('password/index/sukses');
		}else{
			redirect('password/index/gagal');
		}
	}

}