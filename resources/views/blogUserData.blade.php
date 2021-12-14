<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Your Blog Liste Below:</h2>
	<table border="2">
        <tr>
            <td>Name</td>
        </tr>
        @foreach($userBlogData as $all)
        <tr>
            <td>{{ $all->name }}</td>
        </tr>
        @endforeach
    </tr>
</table>
</body>
</html>