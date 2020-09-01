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
							  <th class="text-white">Nama Jalur</th>
							  <th class="text-white">EDIT</th>
							  <th class="text-white">HAPUS</th>
							</tr>
						</thead>

		@foreach ($jalur as $data)
		<tr>
			<td>{{$data->ln_id}}</td>
			<td>{{$data->ln_name}}</td>
			<td><a href="{{URL::to('lane')}}/{{$data->ln_id}}/edit">EDIT
			<td>
				<form action="/lane/{{$data->ln_id}}" method="post">
				<input type="submit" class="btn btn-danger mb-1 mr-1" name="submit" value="DELETE">
				<input type="hidden" name="_method" value="DELETE">	
				{{csrf_field()}}
				</form>
			</td>
		</tr>
		@endforeach
	</table>
<a href="{{URL::to('lane/tambah')}}">Tambah</a>
</body>
</html>
@endsection