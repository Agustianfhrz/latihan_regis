<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Koneksi database MySQL</title>
</head>
<body>
<h2>Koneksi database MySQL</h2>
<?php
	// Membuat koneksi ke localhost MySQL
	$conn = mysqli_connect("localhost", "root", "", "kampus1");

	// Memeriksa koneksi
	if ($conn) {
		echo "OK Connected";
	} else {
		// Menampilkan pesan error jika koneksi gagal
		echo "Server not connected: " . mysqli_connect_error();
	}
?>
</body>
</html>
