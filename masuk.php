<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>login</title>
</head>
<body>
	<center>
		<h2>Aplikasi Pendaftaran</h2>
	<form action="masuk-log.php" method="POST">
		<table>
			<tr>
				<td>Nim</td>
				<td>:</td>
				<td><input type="text" name=nim></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" required="wajib isi !!"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" required=""></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td colspan="2">
					<input type="radio" name="pria" value="pria">pria
					<input type="radio" name="wanita" value="wanita">wanita <br>
				</td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td>
				<select>
  					<option value="volvo">Manajemen Informatika</option>
  					<option value="saab">Tekhnik Komputer Jaringan</option>
  					<option value="opel">Tekhnik Informatika</option>
  					<option value="audi">Komuterisasi Manajemen Pemasaran</option>
  					<option value="audi">Komuterisasi Tekhnik Telekomunikasi</option>
  					<option value="audi">Komuterisasi System Multimedia</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td>
					 <input type="checkbox" name="Hobi[]" value="mendaki">Mendaki <br>
					<input type="checkbox" name="Hobi[]" value="main ML">Main ML <br>
					 <input type="checkbox" name="Hobi[]" value="Memanah">Memanah <br>
					 <input type="checkbox" name="Hobi[]" value="membaca">Membaca <br>
					 <input type="checkbox" name="Hobi[]" value="berenang">Berenang <br>
				</td>
			</tr>
			<tr>
				<td>Upload Foto</td>
				<td>:</td>
				<td><input type="file" name="upload" value="upload" required=""></td>
			</tr>
			<tr>
				<td><input type="submit" name="kirim" ></td>
				<td colspan="2"><input type="reset" name="reset"></td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>