<?php
$conn = mysqli_connect("localhost", "root", "", "multilevel");

if ( isset($_POST["submit"]) ) {

	$nim = $_POST["nim"];
	$nama = $_POST["nama"];

	$query = "INSERT INTO mahasiswa
				VALUES
			('', '$nim', '$nama')
	";
	mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<center>
		<H2><font color="RED">DATA PERPUSTAKAAN UNIVERSITAS GAJAYANA MALANG</font></H2>
		<br/>
		<h3>TAMBAH DATA</h3>
		<form method="post" action="">
			<table>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="nim"></td>
				</tr>

				<tr>
					<button type="submit" name="submit">Tambah Data!</button>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>