<?php

echo "<div class='col-md-8 col-md-offset-2'>";
echo heading("Tambah Buku Baru",3);

echo form_open_multipart('buku/update');
echo form_label('Judul Buku','judul_buku');
foreach($buku as $b){
	echo form_hidden('id_buku',$b->id_buku);
	echo form_input(array('name' => 'judul_buku','class'=>'form-control','value' => $b->judul_buku));
}
echo br();

echo form_label('Penulis Buku','penulis_buku');
echo form_input(array('name' => 'penulis_buku','class'=>'form-control','value' => $b->penulis_buku));

echo br();
echo "<div class='col-md-8 row'>";
echo form_label('Penerbit Buku','penerbit_buku');
echo form_input(array('name' => 'penerbit_buku','class'=>'form-control','value' => $b->penerbit_buku));
echo "</div>";

// select tahun
echo "<div class='col-md-4'>";
echo form_label('Tahun Terbitan Buku','tahun_buku');
echo "<select class='form-control' name='tahun_buku'>";
for($thn=1990;$thn<2030;$thn++){
	?>
	<option <?php if($b->tahun_buku==$thn){ echo 'selected="selected"'; } ?> value="<?php echo $thn ?>"><?php echo $thn ?></option>
	<?php
}

echo "</select>";
echo "</div>";
echo br(4);
echo form_label('Kategori Buku','kategori_buku');
echo "<select class='form-control' name='kategori_buku'>";
foreach($kategori as $k){
	?>

	<option <?php if($b->kategori_buku==$k->id_kategori){echo "selected='selected'";} ?> value="<?php echo $k->id_kategori ?>"><?php echo $k->kategori ?></option>

	<?php
}
echo "</select>";
echo br();
echo form_label('Gambar Sampul','sampul');
// echo form_upload(array('class'=>'btn btn-default','name'=>'sampul_buku'));
echo br();
echo "<input type='file' name='sampul_buku'>";
echo br();
echo form_submit(array('class'=>'btn btn-primary','value'=>'Simpan'));
echo nbs(2);
echo anchor('buku','Batal');
echo form_close();


echo "</div>";
?>