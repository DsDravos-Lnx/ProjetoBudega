<?php $__env->startSection('content'); ?>

    <div class="flex-wrap">
      <!-- Menu superior -->
      <nav class="navbar navbar-expand-lg navbar-light bg-dark text-white">
        <a class="navbar-brand text-white" href="dashboard.html">QBudega</a>
        <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-white px-4" href="#" data-toggle="modal" data-target="#configUser">Configurações</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-white px-4" href="#" data-toggle="modal" data-target="#about">Sobre</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-white px-4" href="login.html">Sair</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link text-white px-4" href="login.html"> <?php echo e(Auth::user()->name); ?></a>
            </li>
          </ul>
        </div>
      </nav>
         
      <!-- Links Modais -->
      <div class="w-100 text-center">
        <a href="compra_produto.html" class="btn btn-outline-dark mx-1 mt-4">+ Compra</a> 
        <a href="#model" class="btn btn-outline-dark mx-1 mt-4" data-toggle="modal" data-target="#addUser">+ Usuario</a>
        <a href="#model" class="btn btn-outline-dark mx-1 mt-4" data-toggle="modal" data-target="#addProduct">+ Produto</a>
        <a href="#model" class="btn btn-outline-dark mx-1 mt-4" data-toggle="modal" data-target="#addSupplier">+ Fornecedor</a>
        <a href="#model" class="btn btn-outline-dark mx-1 mt-4" data-toggle="modal" data-target="#addClient">+ Cliente</a>
      </div>

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
  
    <!-- Modais -->
      <div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="aboutLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="aboutLabel">Sobre</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              O sistema foi produzido em prol acadêmico afim de trazer o uso prático em nossas habilidades na utilização do Laravel e seus componentes.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="configUser" tabindex="-1" role="dialog" aria-labelledby="configUserLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="" method="POST">
              <div class="modal-header">
                <h5 class="modal-title" id="configUserLabel">Configurar usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <label for="name" class="col-form-label">Nome:</label>
                <input type="text" name="name" class="form-control" required value="MCH_AGG">
                <label for="email" class="col-form-label">E-mail:</label>
                <input type="email" name="email" class="form-control" required value="MCH_AGG">
                <label for="login" class="col-form-label">Login:</label>
                <input type="text" name="login" class="form-control" required value="MCH_AGG">
                <label for="password" class="col-form-label">Senha:</label>
                <input type="password" name="password" class="form-control" required value="MCH_AGG">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="addUserLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="" method="POST">
              <div class="modal-header">
                <h5 class="modal-title" id="addUserLabel">Adicionar usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <label for="name" class="col-form-label">Nome:</label>
                <input type="text" name="name" class="form-control" required>
                <label for="email" class="col-form-label">E-mail:</label>
                <input type="email  " name="email" class="form-control" required>
                <label for="login" class="col-form-label">Login:</label>
                <input type="text" name="login" class="form-control" required>
                <label for="password" class="col-form-label">Senha:</label>
                <input type="text" name="password" class="form-control" required>              
                <label for="userType" class="col-form-label" title="O do tipo administrador poderá criar as contas dos dois tipos de usuários do sistema sem poder gerenciar a parte da loja. Em contra partida o caixa poderá gerenciar todo o negócio e ">Tipo de usuário:</label>
                <select name="userType" class="form-control" required>
                  <option value="admin">Administrador</option>}
                  <option value="cube">Caixa</option>}
                </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal fade" id="addClient" tabindex="-1" role="dialog" aria-labelledby="addClientLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="" method="POST">
              <div class="modal-header">
                <h5 class="modal-title" id="addClientLabel">Adicionar cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <label for="name" class="col-form-label">Nome:</label>
                <input type="text" name="name" class="form-control" required>
                <label for="cpf" class="col-form-label">CPF:</label>
                <input type="text" name="cpf" class="form-control" required>
                <label for="contact" class="col-form-label">Contato:</label>
                <input type="text" name="contact" class="form-control" required>
                <label for="adress" class="col-form-label">Endereço:</label>
                <input type="text" name="adress" class="form-control" required>
                <label for="age" class="col-form-label">Idade:</label>
                <input type="text" name="age" class="form-control" required>
                <label class="col-form-label">Sexo:</label>
                <input type="radio" name="gender" id="sexoM" value="M">
                <label for="sexoM"  class="col-form-label">Masculino</label>
                <input type="radio" name="gender" id="sexoF" value="F">
                <label for="sexoF" class="col-form-label">Feminino</label><br/>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="addProductLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="" method="POST">
              <div class="modal-header">
                <h5 class="modal-title" id="addProductLabel">Adicionar produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <label for="name" class="col-form-label">Nome:</label>
                <input type="text" name="name" class="form-control" required>
                <label for="description" class="col-form-label">Descrição:</label>
                <textarea name="description" class="form-control" required></textarea>
                <label for="image" class="col-form-label">Foto:</label>
                <input type="file" name="image" class="form-control" required><!-- Essa foto vai com base 64 mesmo lol -->
                <label for="price" class="col-form-label">Preço:</label>
                <input type="text" name="price" class="form-control" required>
                <label for="available" class="col-form-label">Condição:</label>
                <select name="available" class="form-control" required>
                  <option value="1">Acessível</option>}
                  <option value="0">Não acessível</option>}
                </select>
                <label for="supplier" class="col-form-label">Fornecedor:</label>
                <select name="supplier" class="form-control">
                  <option value="">Escolha um fornecedor ...</option>
                  option
                </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="modal fade" id="addSupplier" tabindex="-1" role="dialog" aria-labelledby="addSupplierLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="" method="POST">
              <div class="modal-header">
                <h5 class="modal-title" id="addSupplierLabel">Adicionar fornecedor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <label for="name" class="col-form-label">Nome ou Razão Social:</label>
                <input type="text" name="name" class="form-control" required>
                <label for="cnpj" class="col-form-label">CNPJ:</label>
                <input type="text" name="cnpj" class="form-control">
                <label for="contact" class="col-form-label">Contato:</label>
                <input type="text" name="contact" class="form-control" required>
                <label for="adress" class="col-form-label">Endereço:</label>
                <input type="text" name="adress" class="form-control" required>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ProjetoBudega/projetoBudega/resources/views/home.blade.php ENDPATH**/ ?>