<?php
	session_start();
	$conn = mysqli_connect('localhost','root', '','d_modul5');
	$pk = $_SESSION['pk'];
		$sql = "SELECT * FROM t_jurnal1 WHERE nim = 'pk'";
		$query = mysqli_query($conn,$sql);
		$hasil = mysql_fetch_array($query);
		echo "nama :".$hasil['nama']."<br>";
		echo "Komentar :".$hasil['Komentar']."<br>";
		echo "Email :".$hasil['email']."<br>";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Jurnal 5</title>
</head>
<body>
	<form action="" method="POST">
		Nama :<input type="" name="nim"> 
		Komentar :<input type="text" name="Komentar"> 
		<input type="submit" name="send" value="kirim">
	</form>
</body>
</html>
<?php
if (isset($_POST['send'])) {
	$komen = $_POST['Komentar'];

	$konek = mysqli_connect('localhost', 'root', '', 'd_modul5');
	$cek = mysqli_query($konek, "update t_jurnal1  VALUES ('$komen','') ");
	if ($cek) {
}

?>