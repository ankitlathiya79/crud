<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<caption>table title and/or explanatory text</caption>
	<thead>
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>SURNAME</th>
			<th colspan="2">DESCRIPTION</th>
		</tr>
	</thead>
	<tbody>
	@foreach($cruds as $crud)
		<tr>
			<td>{{$crud->id}}</td>
			<td>{{$crud->name}}</td>
			<td>{{$crud->surname}}</td>
			<td><a href="{{action('CrudController@edit',$crud->id)}}">Edit</a></td>
			<td><a href="{{action('CrudController@delete',$crud->id)}}">Delete</a></td>

		</tr>
	@endforeach
	</tbody>
</table>

</form>
</body>
</html>