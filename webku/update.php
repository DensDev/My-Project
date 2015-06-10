<?php
include('koneksi.php');

//tangkap data dari form
$id = $_POST['daftar_id'];
$password = $_POST['password'];
$fullname = $_POST['fullname'];
$notelepon = $_POST['no telepon'];
$role = $_POST['role'];

//update data di database sesuai user_id
$query = mysql_query("update user set password='$password', fullname='$fullname', no telepon='$no telepon', role='$role' where id_daftar='$id'") or die(mysql_error());

if ($query) {
	header('location:user.php?msg=success');
} else {
	header('location:user.php?msg=failed');
}
?>