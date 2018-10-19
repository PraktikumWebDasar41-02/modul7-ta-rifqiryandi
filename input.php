<form method="POST">
	Nama:<input type="text" name="nama"><br>
	Nim:<input type="text" name="nim"><br>
	Tanggal lahir:<input type="date" name="tgl"><br>
	jenis kelamin:<select name="jk">
		<option value="laki-laki">laki-laki</option>
		<option value="perempuan">perempuan</option>
	</select><br>
	program studi:<select name="prog">
		<option value="Sistem informasi">Sistem informasi</option>
		<option value="Teknik informatika">Teknik informatika</option>
		<option value="DKV">DKV</option>
	</select><br>
	Fakultas:<input type="radio" name="fak" value="FIT">FIT <input type="radio" name="fak" value="FIK">FIK<br>
	Asal:<input type="text" name="asal"><br>
	Moto hidup:<textarea rows="20" cols="50" name="moto"></textarea><br>
	<input type="submit" name="send" value="submit"><button><a href="view.php">View</a></button>
</form>
<?php
include 'koneksi.php'; 
if (isset($_POST['send'])) {
	$nama = $_POST['nama'];
	if (is_numeric($_POST['nim'])) {
		$nim = $_POST['nim'];
	}
	$tgl = $_POST['tgl'];
	$jk = $_POST['jk'];
	$prodi = $_POST['prog'];
	$fakul = $_POST['fak'];
	$asal = $_POST['asal'];
	$moto = $_POST['moto'];
	if (isset($nim)) {
	$que = mysqli_query($conn,"INSERT INTO datadiri(Nama, Nim, Tgl_lahir, JK, Progsu, fakul, asal, moto_hidup) VALUES ('$nama','$nim','$tgl','$jk','$prodi','$fakul','$asal','$moto')");
	if ($que) {
		echo "Berhasil";
	}else{
		echo "GAGAL";
	}	
	}
	
}
 ?>
