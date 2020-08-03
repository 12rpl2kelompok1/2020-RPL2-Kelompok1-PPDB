<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
</head>
<body>
	<h1>DATA SISWA</h1>
	<method="post">
		@csrf
		<table style="height: 100px">
			<tr>
				<td>Nama Siswa</td>
				<td>:</td>
				<td><input type="text" name="nama_siswa"></td>
			</tr>
		
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="gender" value="pria">Pria
					<input type="radio" name="gender" value="wanita">Wanita</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>:</td>
				<input type="text" name="religion">
			</tr>
			<tr>
				<td>Sekolah Akhir</td>
				<td>:</td>
				<td><input type="text" name="last_school"></td>
			</tr>
		</table>

</body>
</html>