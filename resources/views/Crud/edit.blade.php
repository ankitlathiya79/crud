<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<form action="{{action('CrudController@update',$crud->id)}}" method="post" accept-charset="utf-8">
{{method_field('PATCH')}}
{{csrf_field()}}

	

<table>
	<caption></caption>
	<thead>
		<tr>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{$crud->name}}" placeholder="Enter Your Name">
		</tr>
		<tr>
			<td>SurName</td>
			<td><input type="text" name="surname" value="{{$crud->surname}}" placeholder="Enter Your Surname">
		</tr>
        <tr>
        	<td><input type="submit" name="" value="submit" placeholder=""></td>
        </tr>
	</tbody>
	</form>
</table>	
</body>
</html>