<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Dashboard</title>
    <style type="text/css" media="screen">
      .card.bg-dark {margin: 15px 0px;}
    </style>
  </head>
  <body style="background: rgb(230,230,230);">

<!--- FIm dos models-->

    <div class="flex-wrap">
      <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white">
        <a class="navbar-brand text-white" href="dashboard.html">QBudega</a>
        <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon text-white"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-white" href="#">Configurações</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-white" href="#">Sobre</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-white" href="login.html">Sair</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-white" href="login.html">
                <?php 
                  if (Auth::check()){
                    echo Auth::user()->name;
                  } else {
                    echo " ##### ";
                  }
                ?>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!-- Cards com os botões -->
      <div class="row m-auto text-white pt-2">
        <div class="col-lg-4">
          <div class="card bg-dark">
            <div class="card-body">
              <h5 class="card-title">Compras</h5>
              <p class="card-text"></p>
              <a href="compras.html" class="btn btn-secondary">Ver mais</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card bg-dark">
            <div class="card-body">
              <h5 class="card-title">Produtos</h5>
              <p class="card-text"></p>
              <a href="produtos.html" class="btn btn-secondary">Ver mais</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card bg-dark">
            <div class="card-body">
              <h5 class="card-title">Dívidas</h5>
              <p class="card-text"></p>
              <a href="dividas.html" class="btn btn-secondary">Ver mais</a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-4">
          <div class="card bg-dark">
            <div class="card-body">
              <h5 class="card-title">Fornecedores</h5>
              <p class="card-text"></p>
              <a href="fornecedores.html" class="btn btn-secondary">Ver mais</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="card bg-dark">
            <div class="card-body">
              <h5 class="card-title">Clientes</h5>
              <p class="card-text"></p>
              <a href="clientes.html" class="btn btn-secondary">Ver mais</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>