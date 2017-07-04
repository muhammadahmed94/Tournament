<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body><form method="POST" action="/user">
{{ csrf_field()}}
<label>Name:</label><input type="text" name="name" id="name"><br>
<label>Email:</label><input type="email" name="email" id="email"><br>
<label>Password:</label><input type="password" name="password" id="password"><br>
<input type="submit" name="Create">
</form>
</body>
</html>