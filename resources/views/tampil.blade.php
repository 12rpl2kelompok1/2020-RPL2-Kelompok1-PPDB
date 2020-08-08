<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>id</td>
			<td>Nama</td>
			<td>Tempat, Tanggal Lahir</td>
			<td>Jenis Kelamin</td>
			<td>Agama</td>
			<td>Alamat</td>
			<td>Asal Sekolah</td>
			<td>Nama Ayah</td>
			<td>Pekerjaan Ayah</td>
			<td>Nama Ibu</td>
			<td>Pekerjaan Ibu</td>
			<td>EDIT</td>
		</tr>
		@foreach ($c as $data)
		<tr>
			<td>{{$data->id}}</td>
			<td>{{$data->name}}</td>
			<td>{{$data->date_of_birth}}</td>
			<td>{{$data->gender}}</td>
			<td>{{$data->religion}}</td>
			<td>{{$data->addres}}</td>
			<td>{{$data->last_school}}</td>
			<td>{{$data->fathers_name}}</td>
			<td>{{$data->fathers_occupation}}</td>
			<td>{{$data->mothers_name}}</td>
			<td>{{$data->mothers_occupation}}</td>
			<td><a href="{{URL::to('edit')}}/{{$data->id}}">EDIT
				<!--<input type="hidden" name="_method" value="EDIT">--></td>
		</tr>
		@endforeach
	</table>

</body>
</html>