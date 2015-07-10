<?php
error_reporting(0);
$data=array(
	'table_open' => '<table class="table table-bordered">'
	);

echo heading('Data Buku',2);
echo br(2);
// tambah tombol
// echo "<div class='col-md-12'>";
echo "<div class='col-md-7'>";
echo anchor('buku/tambah/','Tambah Buku',array('class' => 'btn btn-info'));
echo "</div>";

// form search data buku
echo form_open('buku');
echo "<div class='col-md-4'>";
echo form_input(array('class'=>'form-control','name'=>'cari','placeholder'=>'Cari Judul, Penulis, Penerbit buku ..'));
echo "</div>";
echo form_submit(array('class'=>'btn btn-info','value'=>'Cari'));
echo "</form>";
// echo "</div>";
echo br(1);


// cari menurut

echo "<div class=''>";
echo form_open('buku');
// label filter
echo "<div class='col-md-6'>";
// echo form_label('Filter Menurut :','');
echo "</div>";
echo "<div class='col-md-1'>";
echo form_label('Filter Menurut:','');
echo "</div>";

echo "<div class='col-md-4'>";
echo "<select class='form-control' name='fil_kategori'>";
echo "<option>Kategori ..</option>";
foreach($f_kategori as $f_k){
     echo "<option value='".$f_k->kategori."'>".$f_k->kategori."</option>";
}
echo "</select>";
echo "</div>";

echo form_submit(array('class'=>'btn btn-info','value'=>'Filter','name'=>'filter'));
echo form_close();


echo "</div>";

// akhir cari menurut

echo br(1);
echo $this->table->set_template($data);
$n=array('class'=>'col-md-1','data'=>'No','style'=>'width:30px');
$judul=array('class'=>'col-md-3','data'=>'Judul Buku');
$opsi=array('class'=>'col-md-3','data'=>'Opsi');
echo $this->table->set_heading($n,$judul,'Penerbit','Kategori',$opsi);
$no=1;
foreach($buku as $b){
	$image = array(
          'src' => 'sampul/'.$b->sampul_buku,          
          'class' => 'post_images',
          'width' => '200',
          'height' => '200',
          'title' => 'That was quite a night',
          'rel' => 'lightbox',
          );
	echo $this->table->add_row($no++,$b->judul_buku,$b->penerbit_buku,$b->kategori,anchor('buku/edit/'.$b->id_buku,'Edit',array('class' => 'btn btn-info'))." ".anchor('buku/hapus/'.$b->id_buku,'Hapus',array('class' => 'btn btn-danger'))." ".anchor('buku/detail/'.$b->id_buku,'Detail',array('class' => 'btn btn-warning')));
}

echo $this->table->generate();

?>