<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="{{ url('api/admins/create') }}" method="POST">
        
        <input type="text" name="name" placeholder="Nome">
		<input type="text" name="email" placeholder="Email">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Senha">
        
        <input type="submit" Value="Entrar">
	</form>
</body>
</html>