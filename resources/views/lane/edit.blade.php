<!DOCTYPE html> 
<html>
<head>
	<title>Data Jalur</title>
</head>
<body>
	<h1> EDIT DATA JALUR</h1>
	<form method="post" action="/lane/{{$jalur->id}}/edit">
		@csrf
		<table style="height: 100px">
			<tr>
				<td>Nama Jalur</td>
				<td>:</td>
				<td><input type="text" name="ln_name" value="{{$jalur->ln_name}}"></td>
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