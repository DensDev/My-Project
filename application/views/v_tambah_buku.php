<!-- <ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>
 -->

<?php

echo "<div class='col-md-8 col-md-offset-2'>";
echo heading("Tambah Buku Baru",3);
echo br();
echo form_open_multipart('buku/do_upload');
echo form_label('Judul Buku','judul_buku');
echo form_input(array('name' => 'judul_buku','class'=>'form-control'));

echo form_label('Penulis Buku','penulis_buku');
echo form_input(array('name' => 'penulis_buku','class'=>'form-control'));

echo form_label('Penerbit Buku','penerbit_buku');
echo form_input(array('name' => 'penerbit_buku','class'=>'form-control'));

echo form_label('Tahun Terbitan Buku','tahun_buku');
echo "<select class='form-control' name='tahun_buku'>";
for($thn=1990;$thn<2030;$thn++){
	echo "<option value=".$thn.">".$thn."</option>";
}
echo "</select>";

echo form_label('Kategori Buku','kategori_buku');
echo "<select class='form-control' name='kategori_buku'>";
foreach($kategori as $k){
	echo "<option value=".$k->id_kategori.">".$k->kategori."</option>";
}
echo "</select>";

echo form_label('Gambar Sampul','sampul');
// echo form_upload(array('class'=>'btn btn-default','name'=>'sampul_buku'));
echo br();
echo "<input type='file' name='sampul_buku'>";

echo form_submit(array('class'=>'btn btn-primary','value'=>'Simpan'));
echo form_close();

echo "</div>";
?>