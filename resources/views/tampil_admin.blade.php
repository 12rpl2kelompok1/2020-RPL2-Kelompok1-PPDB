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
			<td>Email</td>
			<td>EDIT</td>
			<td>HAPUS</td>
		</tr>
		@foreach ($d as $data)
		<tr>
			<td>{{$data->id}}</td>
			<td>{{$data->name}}</td>
			<td>{{$data->email}}</td>
			<td><a href="{{URL::to('edit_admin')}}/{{$data->id}}">EDIT
			<td><a href="{{URL::to('admin')}}/{{$data->id}}">Hapus
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>