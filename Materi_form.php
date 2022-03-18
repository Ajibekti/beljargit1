<!DOCTYPE html>
<html>
<head>
	<title>Form Registrasi</title>

</head>
<body>
	<form action="Dataregistrasi.php" method="post">
		<b>Data Registrasi</b>
		<br>
		<br>
		<b>Isi Data Di Bawah Ini</b>
		<pre>
Nama : <input type="text" name="nama" size="25" maxlength="50">
Alamat : <input type="text" name="alamat" size="25" maxlength="50">
Tempat Lahir : <input type="text" name="tempat lahir" size="25" maxlength="50">
Tanggal Lahir : <input type="text" name="tanggal lahir" size="25" maxlength="50">
		</pre>
Jenis Kelamin :
<input type="radio" name="jenis kelamin" value="Laki-Laki">Laki - laki
<input type="radio" name="jenis kelamin" value="Perempuan">Perempuan
<p>
Pendidikan :
<select name="pendidikan">
<option value="-pilih-">
<option value="Smp">Smp
<option value="Smk">Smk
<option value="D3">D3
<option value="S1">S1
</select>
<p>
	<input type="submit" value="kirim"><input type="reset" value="cancel">
</form>
</body>
</html>