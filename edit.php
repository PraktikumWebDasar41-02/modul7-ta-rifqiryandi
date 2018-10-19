<?php
include'koneksi.php';
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $que = mysqli_query($conn,"SELECT * FROM datadiri WHERE Nim =$nim");
    while ($acc = mysqli_fetch_array($que)) {
        
    
?>
<form action="#" method="POST">
    Nama:<input type="text" name="nama" value=<?php echo $acc['Nama']; ?> ><br>
	Nim:<input type="text" name="nim" disabled value=<?php echo $acc['Nim']; ?>><br>
	Tanggal lahir:<input type="date" name="tgl" value=<?php echo $acc['Tgl_lahir']; ?>><br>
	jenis kelamin:<select name="jk">
		<option value="laki-laki" <?php echo($acc['JK']=="laki-laki")?'selected':'' ?>>laki-laki</option>
		<option value="perempuan" <?php echo($acc['JK']=="perempuan")?'selected':'' ?>>perempuan</option>
	</select><br>
	program studi:<select name="prog">
		<option value="Sistem informasi" <?php echo($acc['Progsu']=="Sistem informasi")?'selected':'' ?>>Sistem informasi</option>
		<option value="Teknik informatika" <?php echo($acc['Progsu']=="Teknik informatika")?'selected':'' ?>>Teknik informatika</option>
		<option value="DKV" <?php echo($acc['Progsu']=="DKV")?'selected':'' ?>>DKV</option>
	</select><br>
	Fakultas:<input type="radio" name="fak" value="FIT" <?php echo($acc['fakul']=="FIT")?'checked':'' ?>>FIT <input type="radio" name="fak" value="FIK" <?php echo($acc['fakul']=="FIK")?'checked':'' ?>>FIK<br>
	Asal:<input type="text" name="asal" value=<?php echo $acc['asal']; ?>><br>
	Moto hidup:<textarea rows="20" cols="50" name="moto"><?php echo $acc['moto_hidup']?></textarea><br>
	<input type="submit" name="send" value="submit">
</form>

<?php
    }
}

if (isset($_POST['send'])) {
    $nama = $_POST['nama'];
	
	$tgl = $_POST['tgl'];
	$jk = $_POST['jk'];
	$prodi = $_POST['prog'];
	$fakul = $_POST['fak'];
	$asal = $_POST['asal'];
	$moto = $_POST['moto'];
	if (isset($nim)) {
	$que = mysqli_query($conn,"UPDATE datadiri SET Nama='$nama',Tgl_lahir='$tgl',JK='$jk',Progsu='$prodi',fakul='$fakul',asal='$asal',moto_hidup='$moto' WHERE Nim='$nim'");
	if ($que) {
        echo "Berhasil";
        header("Location:view.php");
	}else{
		echo "GAGAL";
	}	
	}
}
?>