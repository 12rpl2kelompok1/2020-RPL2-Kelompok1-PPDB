@extends('frontend.master')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table layout-table">
						<thead class="bg-purple">
							<tr>
							  <th class="text-white">ID</th>
							  <th class="text-white">Nama</th>
							  <th class="text-white">Tempat, Tanggal Lahir</th>
							  <th class="text-white">Jenis Kelamin</th>
							  <th class="text-white">Agama</th>
							  <th class="text-white">Alamat</th>
							  <th class="text-white">Asal Sekolah</th>
							  <th class="text-white">Nama Ayah</th>
							  <th class="text-white">Pekerjaan Ayah</th>
						      <th class="text-white">Nama Ibu</th>
						      <th class="text-white">Pekerjaan Ibu</th>
						      <th class="text-white">EDIT</th>
							</tr>
						</thead>
			
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
@endsection