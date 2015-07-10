<?php
error_reporting(0);
echo "<div class='col-md-6 col-md-offset-3'>";
$data=array(
	'table_open' => '<table class="table table-bordered">'
	);

echo heading('Kategori',2);
echo br(2);
echo "<div class='col-md-10'>";

if($this->uri->segment(2)=="edit"){
	foreach($edit as $e){
		echo form_open('kategori/update');
		echo form_hidden('id_kategori',$e->id_kategori);
		echo form_input(array('name' => 'kategori','class'=>'form-control','value'=>$e->kategori));

		
	}	
}else{
	echo form_open('kategori/input');
	echo form_input(array('name' => 'kategori','class'=>'form-control'));	
	
}

echo "</div>";
echo form_submit(array('class' => 'btn btn-info','value'=>'Simpan'));
echo form_close();
echo br(3);
echo $this->table->set_template($data);

$opsi=array('class'=>'col-md-4','data'=>'Opsi');

echo $this->table->set_heading('No','Kategori',$opsi);
$no=1;
foreach($kategori as $k){
	echo $this->table->add_row($no++,$k->kategori,
		anchor('kategori/edit/'.$k->id_kategori,'Edit',array('class' => 'btn btn-info col-md-offset-1'))." ".
		anchor('kategori/hapus/'.$k->id_kategori,'Hapus',array('class' => 'btn btn-danger')));
}

echo $this->table->generate();


echo "</div>"
?>