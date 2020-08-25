@extends('frontend.master')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Data</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>id</td>
			<td>Nama Jalur</td>
			<td>EDIT</td>
			<td>HAPUS</td>
		</tr>

		</tr>
		@foreach ($jalur as $data)
		<tr>
			<td>{{$data->id}}</td>
			<td>{{$data->ln_name}}</td>
			<td><a href="{{URL::to('lane')}}/{{$data->id}}/edit">EDIT
			<td>
				<form action="/lane/{{$data->id}}" method="post">
				<input type="submit" name="submit" value="DELETE">
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