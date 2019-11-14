
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Login</title>
  </head>
  <body style="background: rgb(230,230,230);">
    <style type="text/css" media="screen">
      .flex-wrap {
         width: 100vw;
         height: 100vh;
         display: flex;
         flex-direction: row;
         justify-content: center;
         align-items: center
     }
    form {
         width: 400px;
         height: 400px;
         margin-top: 110px;
    }
    </style>
    <div class="flex-wrap">
        <form action="<?php echo e(route('api.register_user')); ?>" method="POST">
            <h2 class="text-center">Cadastrar Usuario</h2>
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control" aria-describedby="name" placeholder="Usuario">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="email" placeholder="ex.: usuario@gmail.com">
            </div>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-secondary w-100 p-2 mt-4">Cadastrar</button>            
        </form>    
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\ProjetoBudega\projetoBudega\resources\views/userRegister.blade.php ENDPATH**/ ?>