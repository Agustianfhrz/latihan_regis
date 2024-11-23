<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Koneksi Database PHP-MySQL</title>
</head>
<body>
<h2>Akses Tabel menggunakan mysqli_fetch_array()</h2>

<?php 
	$conn = mysqli_connect("localhost", "root", "", "kampus1")
	or die ("Koneksi gagal");

	$hasil = mysqli_query($conn, "SELECT * FROM category");

	if ($hasil) {
		while ($row = mysqli_fetch_array($hasil)) {
			echo "ID Kategori: " . $row["category_id"];
			echo " dengan nama kategori: " . $row[1];
			echo "<br>";
		}
	} else {
		echo "Query gagal: " . mysqli_error($conn);
	}

	mysqli_close($conn);
?>
</body>
</html>