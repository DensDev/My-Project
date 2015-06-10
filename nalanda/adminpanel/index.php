<?php
session_start();
error_reporting(0);
if (!isset($_SESSION['adminsh']))
{
	header('location:login.php');
	exit;
}
else{ ?>
<!--Memanggil awal halaman-->
<?php include "konten/awal.php"; ?>
<body>
<div id="wrapper"><!--Awal id wrapper-->
	<div id="atas"><!--Awal id atas-->
	
	<!--Memanggil bagian header-->
	<?php include "konten/header.php"; ?> 
	
	</div><!--Akhir id atas-->
	<div class="clear"></div>
	
	<div id="konten"><!--Awal id konten-->
		<div id="samping"><!--Awal id samping-->
		
			<!--Menu yang ditampilkan sesuai dengan halaman yang tampil pada browser (kelas aktif)-->
			<div class="menu"><div class="isimenuHome"><a href="index.php">Beranda</a></div></div>
			<div class="menu"><div class="isimenuBerita"><a href="berita.php">Berita</a></div></div>
			<div class="menu"><div class="isimenuInformasi"><a href="informasi_kampus.php">Informasi Kampus</a></div></div>
			<div class="menu"><div class="isimenuGuru"><a href="dosen_staff.php">Dosen dan Staff</a></div></div>
			<div class="menu"><div class="isimenuSiswa"><a href="mahasiswa.php">Mahasiswa</a></div></div>
			<div class="menu"><div class="isimenuMapel"><a href="mata_kuliah.php">Mata Kuliah</a></div></div>
			<div class="menu"><div class="isimenuPSB"><a href="pmb_online.php">PMB Online</a></div></div>
			<div class="menu"><div class="isimenuAlbum"><a href="album_galeri.php">Album Galeri</a></div></div>
			<div class="menu"><div class="isimenuBuku"><a href="buku_tamu.php">Buku Tamu</a></div></div>
			<div class="menu"><div class="isimenuAdmin aktif"><a href="admin.php">Manajemen Admin</a></div></div>
			<?php if($_SESSION['leveluser']=='Super Admin'){ ?>
			<div class="menu"><div class="isimenuPengaturan"><a href="pengaturan.php">Pengaturan</a></div></div>
			<?php } ?>
		</div><!--Akhir id samping-->
	
		<div id="kanan"><!--Awal id kanan-->
			<h3>Dashboard</h3>
			
				<div class="kanankecil">
				<!--menampilkan informasi website-->
				<?php include "konten/informasi_website.php"; ?>
				</div>
				
				<div class="kanankecil">
				<!--Menampilkan form pengumuman pada halaman dashboard, form ini digunakan sebagai shortcut atau jalan pintas
				yang tidak mengharuskan admin untuk masuk ke modul pengumuman-->
				<?php include "konten/form_pengumuman.php"; ?>
				</div>
				<div class="clear"></div>
				
				<div class="kanankecil">
				<!--Menampilkan 5 komentar berita terbaru-->
				<?php include "konten/komentar_terbaru.php"; ?>	
				</div>
				
				<div class="kanankecil">
				<?php include "konten/info_psb.php"; ?>
				</div>
				
				<div class="kanankecil" style="float: right; margin-right: 2.8%;">
				<?php include "konten/banner.php"; ?>
				</div>
		</div><!--Akhir id kanan-->
	
	</div><!--Akhir id konten-->
	<div class="clear"></div>
	
</div><!--Akhir id wrapper-->

	<div class="clear"></div>
	<!--Memanggil bagian footer-->
<?php include "konten/footer.php"; }?>
