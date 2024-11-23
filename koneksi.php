<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Membuat Koneksi ke database</title>
</head>
<body>
<?php 
	$konek = mysql_connect("localhost","root","")
	or die("koneksi ke server gagal");
	mysql_close($konek);
	echo "Koneksi Sukses";

?>
</body>
</html>