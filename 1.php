<!DOCTYPE html>
<html>
<head>
	<title>Jurnal 5</title>
</head>
<body>
	<form  method="POST">
		NIM :<input type="" name="nim"><br><br>
		Nama :<input type="text" name="nama"> <br><br>
		Email :<input type="email" name="email"><br><br>
		<input type="submit" name="send" value="kirim">
	</form>
</body>
</html>
<?php
if (isset($_POST['send'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		
	$konek = mysqli_connect('localhost', 'root', '', 'd_modul5');
	$ceki = mysqli_query($konek, "INSERT INTO t_jurnal1 VALUES ($nim,'$nama', '$email','') ");
	if ($ceki) {
	header("Location: 2.php");	
	}
}
?>