<?php


class Perpus extends CI_Controller{

	function __contruct() {
		parent::__construct();
		cek_login();
	}

	function index(){
		$this->template->load('template','v_perpus');
	}
}