<?php


function cek_login(){
	$ci=& get_instance();
	if($ci->session->userdata('status')!='login'){
		redirect('welcome/login');
	}
	
}

function sudah_login(){
	$ci= & get_instance();
	if($ci->session->userdata('status')=='login'){
		redirect('perpus');
	}
}
?>