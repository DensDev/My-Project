<?php


$submit=array(
	'class' => 'btn btn-primary',
	'value' => 'Ubah'
	);

if($this->uri->segment(3)=="gagal"){
	echo "<div class='alert alert-danger'><b>Peringatan !!</b> Password yang anda masukkan tidak sama !! silahkan ulangi ..</div>";
}else if($this->uri->segment(3)=="sukses"){
	echo "<div class='alert alert-success'><b>Berhasil !!</b> Password berhasil di ganti ..</div>";
}
echo "<div class='col-md-6 col-md-offset-3'>";
echo heading("Ubah Password",3);
echo form_open('password/update');
echo form_password(array('class' => 'form-control','name' => 'pass_baru','placeholder'=>'Masukkan password baru ..'));
echo br();
echo form_password(array('class' => 'form-control','name' => 'pass_ulang','placeholder'=>'Ulangi password anda ..'));
echo br();
echo form_submit($submit);
echo form_close();
echo "</div>";

?>