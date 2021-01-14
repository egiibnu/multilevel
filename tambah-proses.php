<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];

// menginput data ke database
mysqli_query($koneksi,"insert into mahasiswa values('', '$nama', '$nim')");

//mengalihkan halaman kembali ke index.php
header("location:index2.php");

?>