<?php
error_reporting(0);
$data=array(
	'table_open' => '<table class="table table-bordered col-md-offset-4" style="width:500px">'
	);

echo heading('Data Buku',2);
echo br(2);
// tambah tombol
// echo "<div class='col-md-12'>";
echo "<div class='col-md-7'>";
echo anchor('buku/','Kembali ke semua buku',array('class' => 'btn btn-info'));
echo "</div>";

echo br(3);
echo "<div class='col-md-2'>";
echo $this->table->set_template($data);


foreach($detail as $d){
	$image = array(
          'src' => 'sampul/'.$d->sampul_buku,          
          'class' => 'post_images',
          'width' => '200',
          'height' => '300',
          'title' => 'That was quite a night',
          'rel' => 'lightbox'
          );
  
 echo "<div class='col-md-2'>";
echo img($image);
echo "</div>";

  echo $this->table->add_row("Judul Buku",$d->judul_buku);
  echo $this->table->add_row("Penulis Buku",$d->penulis_buku);
  echo $this->table->add_row("Penerbit Buku",$d->penerbit_buku);
  echo $this->table->add_row("Tahun Terbit Buku",$d->tahun_buku);
  echo $this->table->add_row("Kategori Buku",$d->kategori);
	echo "</div>";
}

echo $this->table->generate();

?>