<?php
// koneksi database
include 'koneksi.php';

// menangkap data id yang dikirim dari url
$id = $GET['id'];


// menghapus data dari database
mysqli_query($koneksi,"delete from mahasiswa where id= '$id'");

// mengalihkan halaman kembali ke index.php
header("location:index2.php");

?>