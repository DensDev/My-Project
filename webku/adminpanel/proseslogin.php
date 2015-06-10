<?php
session_start();
include 'koneksi.php';

$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['pass']);
// query untuk mendapatkan record dari username
if (empty($username) && empty($password)) {
	// kalau username dan password kosong
	header('location:login.php?error=1');
	break;
} else if (empty($username)) {
	// kalau username saja yang kosong
	header('location:login.php?error=2');
	break;
} else if (empty($password)) {
	// kalau password saja yang kosong
	header('location:login.php?error=3');
	break;
} else if (empty($username) && empty($password)) {
	header('location:login.php?error=4');
	break ;
}

$query = "SELECT * FROM user WHERE username = '$username'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
// cek kesesuaian password
if ($password == $data['password'])
{
echo "sukses";
    // menyimpan username dan level ke dalam session
    $_SESSION['level'] = $data['level'];
    $_SESSION['username'] = $data['username'];
    //Penggunaan Meta Header HTTP
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=admin.php">';    
	exit;
}
else 
echo '<h1>Login gagal</h1>';
echo '<META HTTP-EQUIV="Refresh" Content="0; URL=login.php">' ;
?>