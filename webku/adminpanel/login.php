<html>
<head>
	<meta name="viewport" content="width=device-width">
	<title>Login Admin Panel</title>
	<meta name="description" content="Responsive Menu with SelectNav JS by Mkhuda">
	<link rel="stylesheet" href="bootstrap/css/login.css" type="text/css" />
	
</head>	
<body>
<?php
// memulai session
session_start();
error_reporting(0);

if (isset($_SESSION['level']))
{
  // jika level admin
  if ($_SESSION['level'] == "admin")
   { 
    header('location:admin.php'); 
   }
   // jika kondisi level user maka akan diarahkan ke halaman lain
   else if ($_SESSION['level'] == "user")
   {
       header('location:user.php');
   }
}
$error = $_GET['error'];
			
			if ($error == 1) {?>
			<div class="error">Username dan Password belum diisi.</div>
			<?php } else if ($error == 2) {?>
			<div class="error">Username belum diisi.</div>
			<?php } else if ($error == 3) {?>
			<div class="error">Password belum diisi.</div>
			<?php } else if ($error == 4) {?>
			<div class="error">Username dan Password tidak terdaftar.</div>
?>

<?php } ?>
<div id="form">
	<form method="post" action="proseslogin.php" class="form-horizontal">
	<label class="username">Username</label><br>
	<input class="input" type="text" name="username" placeholder="Masukkan Username"><br>
	<label class="password">Password</label><br>    	
	<input class="input" type="password" name="pass" placeholder="Masukkan Password"><br>
	<button type="submit" name="submit" class="btn">Login</button>
</form>
<label for="belum punya akun?">Belum Punya Akun?</label><span class="left"><a href="daftar.php">Daftar Baru</a></span>
</div>
<div id="mk-link">
	<a class="link" href="index.php" title="Dunia Hacking">Back to Site</a>
</div>
<script>selectnav('responsive-menu'); </script>
</body>
</html>