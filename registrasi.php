<h1> INPUT DATA MAHASISWA </h1>

<form method="POST">

	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" length="100"></td>
		</tr>

		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="number" name="nim" length="15"></td>
		</tr>


		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki<br>
			<input type="radio" name="jk" value="Perempuan">Perempuan<br></td>
		</tr>

		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name="programstudi">
			<option value="1">Pilih Program Studi</option>
				<option value="MI">Manajemen Informatika</option>
				<option value="MBTI">Manajemen Bisnis</option>
				<option value="DKV">Desain Komunikasi Visual</option>
				<option value="Komunikasi">Ilmu Komunikasi</option>
			</select>
			</td>
		</tr>

		
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
			<option value="1">Pilih Fakultas</option>
				<option value="FIT">Fakultas Ilmu Terapan</option>
				<option value="FEB">Fakultas Ekonomi dan Bisnis</option>
				<option value="FIK">Fakultas Industri Kreatif</option>
				<option value="FKB">Fakultas Komunikasi Bisnis</option>
			</select>
			</td>
		</tr>

		<tr>
			<td>Asal</td>
			<td>:</td>
			<td><input type="text" name="asal" length="50"></td>
		</tr>

		<tr>
			<td>Motto Hidup</td>
			<td>:</td>
			<td><textarea name="motto"></textarea></td>
		</tr>
		<tr>
		<td><input type="submit" name="kirim" value="kirim"></td>
		</tr>

	</table>
</form>

<?php 
 error_reporting(0);
 
if (isset($_POST['kirim'])) {
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "mahasiswa";
	$conn = mysqli_connect($host,$user,$pass,$db);

	$nama    	= $_POST['nama'];
	$nim     	= $_POST['nim'];
	$jeniskl 	= $_POST['jk'];
	$program   	= $_POST['programstudi'];
	$fakultas 	= $_POST['fakultas'];
	$asal 		= $_POST['asal'];
	$motto 		= $_POST['motto'];

	$sql = $conn->query("INSERT INTO data
						 VALUES ('$nama','$nim','$jeniskl','$program','$fakultas','$asal','$motto')");

	echo "Data berhasil diinputkan"."<br>";
	echo "<a href = 'halawal.php'>Klik</a> lanjut";
}
 ?>