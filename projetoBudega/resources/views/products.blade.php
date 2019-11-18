
<?php
  $url = "http://localhost:8086/api/products/";
  $products = json_decode(file_get_contents($url));
?>

@extends('layouts.app')

@section('content')
      <h3 class="p-3">Produtos</h3>
      <table class="table m-auto table-striped table-dark" style="width: 90%;"> 
        <thead class="thead-dark">
          <tr>
            <th scope="col" class="w-25">Produto</th>
            <th scope="col" class="w-25">Descriçao</th>
            <th scope="col" class="w-50">Detalhes</th>
          </tr>
        </thead>
        <tbody>
        <?php
            foreach($products->data as $Product){
              echo "<tr>";
              
              echo "<th  scope='col' class='w-20 text-center'><img src='". $Product->image . "' style='width:150px'><br/>";
              echo "". $Product->name." </th>";
              echo "<th scope='col' class='w-20'>". $Product->description . "</th>";
              
              echo "<th scope='col' class='w-40'>";
                echo "Preço: ". $Product->price . "<br/>";
                echo "Disponibilidade: ". $Product->available . "<br/>";
                echo "<th scope='col' class='w-20'";
                echo" <center class='my-3'>
                <a href='#model' class='btn btn-primary' data-toggle='modal' data-target='#configProduct".$Product->name."'>Editar</a>
                <a href='#model' class='btn btn-danger mx-2' data-toggle='modal' data-target='#deleteProduct".$Product->name."'>Excluir</a>
                </center>";
              echo "</th>";
              echo "</th>";

              echo "</tr>";
              echo "
                <div class='modal fade' id='configProduct".$Product->name."' tabindex='-1' role='dialog' aria-labelledby='configProduct".$Product->name."Label' aria-hidden='true'>
                <div class='modal-dialog' role='document'>
                  <div class='modal-content'>
                    <form action=' method='POST'>
                      <div class='modal-header'>
                        <h5 class='modal-title' id='configProduct".$Product->name."Label'>Editar produto</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                          <span aria-hidden='true'>&times;</span>
                        </button>
                      </div>
                      <div class='modal-body'>
                        <label for='name' class='col-form-label'>Nome:</label>
                        <input type='text' name='name' class='form-control' value='".$Product->name."' required>
                        <label for='description' class='col-form-label'>Descrição:</label>
                        <textarea name='description' class='form-control'  required>".$Product->description."</textarea>
                        <label for='image' class='col-form-label'>Foto:</label>
                        <input type='file' name='image' class='form-control'>
                        <label for='price' class='col-form-label'>Preço:</label>
                        <input type='text' name='price' class='form-control' value='".$Product->price."' required> 
                        <label for='available' class='col-form-label'>Condição:</label>";
                        if($Product->available == 'Sim'){
                            echo "
                              <select name='available' class='form-control' required>
                                <option value='1' checked>Acessível</option>
                                <option value='0'>Não acessível</option>
                              </select>
                            ";
                        }else{
                          echo "
                              <select name='available' class='form-control' required>
                                <option value='1'>Acessível</option>
                                <option value='0' checked>Não acessível</option>
                              </select>
                            ";
                        }
                        echo "
                      </div>
                      <div class='modal-footer'>
                        <input type='hidden' name='id' value='".$Product->id."'>
                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
                        <button type='submit' class='btn btn-primary'>Editar</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <div class='modal fade' id='deleteProduct".$Product->name."' tabindex='-1' role='dialog' aria-labelledby='deleteProduct".$Product->name."Label' aria-hidden='true'>
                <div class='modal-dialog' role='document'>
                  <div class='modal-content'>

                  <form action='productsDelete' method='GET'>
                      <div class='modal-header'>
                        <h5 class='modal-title' id='deleteProduct".$Product->name."Label'>Exlcuir produto</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                          <span aria-hidden='true'>&times;</span>
                        </button>
                      </div>
                      <div class='modal-body'>
                        Excluir <strong>".$Product->name."</strong>?
                      </div>
                      <div class='modal-footer'>
                        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Não</button>
                        <input name='id' type='hidden' value='$Product->id'/> <button type='submit' class='btn btn-danger'>Sim </button>
                      </div>
                    </form>


                  </div>
                </div>
              </div>
              ";
            }
          ?>
        </tbody>
      </table>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endsection