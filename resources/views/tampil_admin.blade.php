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
                                  <th class="text-white">Email</th>
                                  <th class="text-white">EDIT</th>
                                  <th class="text-white">HAPUS</th>
                                </tr>
                            </thead>
							         @foreach ($d as $data)
                                <tr>
									                 <td>{{$data->staff_id}}</td>
									                 <td>{{$data->name}}</td>
									                 <td>{{$data->email}}</td>
									                 <td><a href="{{URL::to('edit_admin')}}/{{$data->staff_id}}">EDIT
									                 <td>
										               <form action="/admin/{{$data->staff_id}}" method="post">
										               <input type="submit" name="submit" value="DELETE">
										               <input type="hidden" name="_method" value="DELETE">	
										               {{csrf_field()}}
										               </form>
									                 </td>
								                </tr>
							         @endforeach
                                    </div>
                                </div>
                            </div>
                        </div> 
<a href="{{URL::to('tambah_admin')}}">Tambah</a>
</body>
</html>
@endsection