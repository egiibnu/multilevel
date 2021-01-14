<!DOCTYPE html>
<html>
<head>
 <title>DATA PERPUSTAKAAN</title>
</head>
<body>
 <?php
 session_start();

 // cek apakah yang mengakses halaman ini sudah login
 if($_SESSION['level']==""){
  header("location:index.php?pesan=gagal");
 }

 ?>
 <center>
 	<h2>DATA PERPUSTAKAAN</h2>
 	<h3>UNIVERSITAS GAJAYANA MALANG</h3>
 	<br/>
 	<a href="tambah.php">Tambah Data Mahasiswa</a>
 	<br/>
 	<br/>
 	<table border="1">
 		<tr>
 			<th>No</th>
 			<th>Nama</th>
 			<th>NIM</th>
 			<th>Opsi</th>
 		</tr>
 		<?php
 		include 'koneksi.php';
 		$no = 1;
 		$data = mysqli_query($koneksi, "select * from mahasiswa where 1");
 		while($d = mysqli_fetch_array($data)){
 			?>
 			<tr>
 				<td><?php echo $no++; ?></td>
 				<td><?php echo $d['nama']; ?></td>
 				<td><?php echo $d['nim']; ?></td>
 				<td>
 					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
 					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
 				</td>
 			</tr>
 			<?php
 		}
 		?>
 	</table>

 	<br/>
 	<br/>
 	<h2>DATA PEMBELIAN DI PERPUSTAKAAN</h2>
 	<h3>UNIVERSITAS GAJAYANA MALANG</h3>
 	<br/>
 	<a href="tambah-beli.php">Tambah Data Mahasiswa</a>
 	<br/>
 	<br/>
 	<table border="1">
 		<tr>
 			<th>No</th>
 			<th>Nama</th>
 			<th>NIM</th>
 			<th>Harga</th>
 		</tr>
 		<?php
 		include 'koneksi.php';
 		$no = 1;
 		$data = mysqli_query($koneksi, "select * from beli");
 		while($d = mysqli_fetch_array($data)){
 			?>
 			<tr>
 				<td><?php echo $no++; ?></td>
 				<td><?php echo $d['nama']; ?></td>
 				<td><?php echo $d['nim']; ?></td>
 				<td><?php echo $d['beli']; ?></td>
 			</tr>
 			<?php
 		}
 		?>
 	</table>
 <br/>
 <br/>
 <br/>

 	<br/>
 	<br/>
 	<h2>DATA PEMINJAMAN DI PERPUSTAKAAN</h2>
 	<h3>UNIVERSITAS GAJAYANA MALANG</h3>
 	<br/>
 	<a href="tambah-beli.php">Tambah Data Mahasiswa</a>
 	<br/>
 	<br/>
 	<table border="1">
 		<tr>
 			<th>No</th>
 			<th>Nama</th>
 			<th>NIM</th>
 			<th>Hari</th>
 		</tr>
 		<?php
 		include 'koneksi.php';
 		$no = 1;
 		$data = mysqli_query($koneksi, "select * from pinjam");
 		while($d = mysqli_fetch_array($data)){
 			?>
 			<tr>
 				<td><?php echo $no++; ?></td>
 				<td><?php echo $d['nama']; ?></td>
 				<td><?php echo $d['nim']; ?></td>
 				<td><?php echo $d['hari']; ?></td>
 			</tr>
 			<?php
 		}
 		?>
 	</table>
 <br/>
 <br/>
 <br/>
 <h1>Ini Halaman Admin</h1>

 <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
 <a href="Logout.php">LOGOUT</a>

 <br/>
 <br/>
</center>
</body>
</html>