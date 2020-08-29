<!DOCTYPE html> 
<html>
<head>
	<title>Data Admin</title>
</head>
<body>
	<h1> EDIT DATA ADMIN</h1>
	<form method="post" action="/edit_admin/{{$admin->staff_id}}">
		@csrf
		<table style="height: 100px">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="name" value="{{$admin->name}}"></td>
			</tr>

			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email" value="{{$admin->email}}"></td>
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