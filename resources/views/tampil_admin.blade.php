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
			<td>
				<form action="/admin/{{$data->id}}" method="post">
				<input type="submit" name="submit" value="DELETE">
				<input type="hidden" name="_method" value="DELETE">	
				{{csrf_field()}}
				</form>
			</td>
		</tr>
		@endforeach

		 <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-0">Table Layout - 3</h4>
                                    <p class="mb-3">Add class - <code>bg-purple</code></p>

                                    <div class="table-responsive">
                                        <table class="table layout-table">
                                            <thead class="bg-purple">
                                                <tr>
                                                    <th class="text-white">#</th>
                                                    <th class="text-white">First Name</th>
                                                    <th class="text-white">Last Name</th>
                                                    <th class="text-white">Username</th>
                                                    <th class="text-white">Phone</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Nigam</td>
                                                    <td>Eichmann</td>
                                                    <td>@Sonu</td>
                                                    <td>013456</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Deshmukh</td>
                                                    <td>Prohaska</td>
                                                    <td>@Sonu</td>
                                                    <td>012356</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Roshan</td>
                                                    <td>Rogahn</td>
                                                    <td>@Hritik</td>
                                                    <td>013456</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Roshan</td>
                                                    <td>Rogahn</td>
                                                    <td>@Hritik</td>
                                                    <td>013456</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Roshan</td>
                                                    <td>Rogahn</td>
                                                    <td>@Hritik</td>
                                                    <td>013456</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Roshan</td>
                                                    <td>Rogahn</td>
                                                    <td>@Hritik</td>
                                                    <td>013456</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
	</table>
<a href="{{URL::to('tambah_admin')}}">Tambah</a>
</body>
</html>
@endsection