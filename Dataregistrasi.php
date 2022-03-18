<!DOCTYPE html>
<html>
<head>
	<title>Data Registrasi</title>
</head>
<body>
<?php
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$tempat_lahir =$_POST['tempat_lahir'];
$tanggal_lahir =$_POST['tanggal_lahir'];
$jenis_kelamin =$_POST['jenis_kelamin'];
$pendidikan =$_POST['pendidikan'];
?>
<table border="1" bgcolor="white">
<tr>
<td colspan="2" align="center"><b>Data Registrasi</b></td>
</tr>
<td>Nama</td><td><?php echo $nama; ?></td>
</tr>
<td>Alamat</td><td><?php echo $alamat; ?></td>
</tr>
<td>Tempat Lahir</td><td><?php echo $tempat_lahir; ?></td>
</tr>
<td>Tanggal Lahir</td><td><?php echo $tanggal_lahir; ?></td>
</tr>
<td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td>
</tr>
<td>Pendidikan</td><td><?php echo $pendidikan; ?></td>
</tr></table>
<a href="Materi_form.php">Back To Home</a>

</body>
</html>