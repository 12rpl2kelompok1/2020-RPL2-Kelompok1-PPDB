<!DOCTYPE html> 
<html>
<head>
	<title>Data Siswa</title>
</head>
<body>
	<h1> EDIT DATA SISWA</h1>
	<form method="post" action="/edit/{{$siswa->id}}">
		@csrf
		<table style="height: 100px">
			<tr>
				<td>Nama Siswa</td>
				<td>:</td>
				<td><input type="text" name="name" value="{{$siswa->name}}"></td>
			</tr>

			<tr>
				<td>Tempat, Tanggal Lahir</td>
				<td>:</td>
				<td><input type="text" name="date_of_birth" value="{{$siswa->date_of_birth}}"></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="gender" value="laki-laki" value="{{$siswa->gender}}">Laki-Laki
					<input type="radio" name="gender" value="perempuan" value="{{$siswa->gender}}">Perempuan
				</td>
			</tr>

			<tr>
				<td>Agama</td>
				<td>:</td>
				<td><input type="text" name="religion" value="{{$siswa->religion}}"></td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="addres" value="{{$siswa->addres}}"></td>
			</tr>

			<tr>
				<td>Asal Sekolah</td>
				<td>:</td>
				<td><input type="text" name="last_school" value="{{$siswa->last_school}}"></td>
			</tr>

			<tr>
				<td>Nama Ayah</td>
				<td>:</td>
				<td><input type="text" name="fathers_name" value="{{$siswa->fathers_name}}"></td>
			</tr>

			<tr>
				<td>Pekerjaan Ayah</td>
				<td>:</td>
				<td><input type="text" name="fathers_occupation" value="{{$siswa->fathers_occupation}}"></td>
			</tr>

			<tr>
				<td>Nama Ibu</td>
				<td>:</td>
				<td><input type="text" name="mothers_name" value="{{$siswa->mothers_name}}"></td>
			</tr>

			<tr>
				<td>Pekerjaan Ibu</td>
				<td>:</td>
				<td><input type="text" name="mothers_occupation" value="{{$siswa->mothers_occupation}}"></td>
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