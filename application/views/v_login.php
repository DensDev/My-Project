<?php


$submit=array(
	'class' => 'btn btn-primary',
	'value' => 'Login'
	);

if($this->uri->segment(3)=="salah"){
	echo "<div class='alert alert-danger'><b>Peringatan !!</b> Password yang anda masukkan salah !! silahkan ulangi ..</div>";
}
echo "<div class='col-md-4 col-md-offset-4'>";
echo heading("Administrator",3);
echo form_open('welcome/login_act');
echo form_input(array('class' => 'form-control','name' => 'username'));
echo br();
echo form_password(array('class' => 'form-control','name' => 'password'));
echo br();
echo form_submit($submit);
echo form_close();
echo "</div>";

?>