<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="{{url('admin/user')}}" method="post">
		{{$token}}
		<input type="text" name="name" id="">
		<input type="submit" value="提交">
	</form>
</body>
</html> 