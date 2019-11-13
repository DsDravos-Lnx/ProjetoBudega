<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo e(route('api.store_admins')); ?>" method="POST">
        
        <input type="text" name="name" placeholder="Nome">
		<input type="text" name="email" placeholder="Email">
        <input type="text" name="login" placeholder="Login">
        <input type="password" name="password" placeholder="Senha">
        
        <input type="submit" Value="Entrar">
	</form>
</body>
</html><?php /**PATH C:\xampp\htdocs\ProjetoBudega\projetoBudega\resources\views/home.blade.php ENDPATH**/ ?>