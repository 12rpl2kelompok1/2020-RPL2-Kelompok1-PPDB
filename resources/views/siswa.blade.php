<!DOCTYPE html> 
<html>
<head>
	<title>Data Siswa</title>
</head>
<body>
	<h1>DATA SISWA</h1>
	<form method="post">
		@csrf
		<table style="height: 100px">
			<tr>
				<td>Nama Siswa</td>
				<td>:</td>
				<td><input type="text" name="name"></td>
			</tr>

			<tr>
				<td>Tempat, Tanggal Lahir</td>
				<td>:</td>
				<td><input type="text" name="date_of_birth"></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="gender" value="laki-laki">Laki-Laki
					<input type="radio" name="gender" value="perempuan">Perempuan
				</td>
			</tr>

			<tr>
				<td>Agama</td>
				<td>:</td>
				<td><input type="text" name="religion"></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="addres"></td>
			</tr>

			<tr>
				<td>Asal Sekolah</td>
				<td>:</td>
				<td><input type="text" name="last_school"></td>
			</tr>

			<tr>
				<td>Nama Ayah</td>
				<td>:</td>
				<td><input type="text" name="fathers_name"></td>
			</tr>

			<tr>
				<td>Pekerjaan Ayah</td>
				<td>:</td>
				<td><input type="text" name="fathers_occupation"></td>
			</tr>

			<tr>
				<td>Nama Ibu</td>
				<td>:</td>
				<td><input type="text" name="mothers_name"></td>
			</tr>

			<tr>
				<td>Pekerjaan Ibu</td>
				<td>:</td>
				<td><input type="text" name="mothers_occupation"></td>
			</tr>

			<tr>
				<td>
					<input type="submit" value="Simpan">
					<input type="reset" name="Reset">
				</td>
			</tr>
       
		</table>

		</form>

</body>
</html>