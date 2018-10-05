<?php
	if (isset($_POST['submit'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		
	$konek = new mysql_connect('localhost', 'root', '', 'd_modul5');
	if ($konek) {
		echo "Koneksi";
	}else{
		echo "Tidak Terkoneksi";
	}
	$query = new mysql_query($konek, " SELECT * FORM t_jurnal1 ")
?>