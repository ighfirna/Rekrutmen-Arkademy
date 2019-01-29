<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form onSubmit="alert('Submitted.');return false;">
	<input type="text" title="8 karakter" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{7,20}$" placeholder="username" required />
	<input type="password" title="8 karakter" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" placeholder="password" required />
	<input type="submit" value="Login" />
</form>
</body>
</html>