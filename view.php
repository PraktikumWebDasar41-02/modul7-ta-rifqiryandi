<button><a href="input.php">INPUT</a></button>
<form method="POST">
	<input type="search" name="cari"><input type="submit" name="send" value="cari"><br>
</form>
<?php 
include 'koneksi.php';


if (isset($_POST['send'])) {
	$cari = $_POST['cari'];
	$quer = mysqli_query($conn,"SELECT * FROM datadiri WHERE Nim LIKE '%".$cari."%'");
	echo "<table border='3'>";
	echo "<th>Nama</th><th>Nim</th><th>Tanggal lahir</th><th>Jenis kelamin</th><th>Prodi</th><th>Fakultas</th><th>Asal</th><th>Moto hidup</th><th>AKSI</th>";
	while ($cc = mysqli_fetch_array($quer)) {
	echo "<tr>";
	echo "<td>".$cc['Nama']."</td>";
	echo "<td>".$cc['Nim']."</td>";
	echo "<td>".$cc['Tgl_lahir']."</td>";
	echo "<td>".$cc['JK']."</td>";
	echo "<td>".$cc['Progsu']."</td>";
	echo "<td>".$cc['fakul']."</td>";
	echo "<td>".$cc['asal']."</td>";
	echo "<td>".$cc['moto_hidup']."</td>";
	echo "<td><a href=hapus.php?nim=".$cc['Nim'].">Hapus</a>//<a href=edit.php?nim=".$cc['Nim'].">EDIT</a></td>";
	echo "</tr>";
	}
	echo "</table>";
}else{
	$que = mysqli_query($conn,"SELECT * FROM datadiri");
echo "<table border='3'>";
echo "<th>Nama</th><th>Nim</th><th>Tanggal lahir</th><th>Jenis kelamin</th><th>Prodi</th><th>Fakultas</th><th>Asal</th><th>Moto hidup</th><th>AKSI</th>";
while ($acc = mysqli_fetch_array($que)) {
	echo "<tr>";
	echo "<td>".$acc['Nama']."</td>";
	echo "<td>".$acc['Nim']."</td>";
	echo "<td>".$acc['Tgl_lahir']."</td>";
	echo "<td>".$acc['JK']."</td>";
	echo "<td>".$acc['Progsu']."</td>";
	echo "<td>".$acc['fakul']."</td>";
	echo "<td>".$acc['asal']."</td>";
	echo "<td>".$acc['moto_hidup']."</td>";
	echo "<td><a href=hapus.php?nim=".$acc['Nim'].">Hapus</a>//<a href=edit.php?nim=".$acc['Nim'].">EDIT</a></td>";
	echo "</tr>";
}
echo "</table>";
}
 ?>
