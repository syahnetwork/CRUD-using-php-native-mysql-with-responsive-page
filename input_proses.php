<?php
	include 'config.php';

	$judulberita = $_POST['judul'];
	$pengarang = $_POST['pengarang'];

	$nama_gambar = $_FILES['foto']['name']; //untuk mengambil nama gambar
	$file_gambar = $_FILES['foto']['tmp_name']; //mengambil file gambar

	move_uploaded_file($file_gambar, "image/" .$nama_gambar);

	$sql = "INSERT INTO buku (judul, pengarang, gambar) VALUES ('$judulberita', '$pengarang', '$nama_gambar')";

	mysqli_query($config, $sql);

	echo "Sukses";
 ?>
