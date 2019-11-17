
<?php
  $url = "http://localhost:8086/api/clients/";
  $clients = json_decode(file_get_contents($url));
?>

@extends('layouts.app')

@section('content')

      <h3 class="p-3">Clientes</h3>
      <table class="table m-auto table-striped table-dark" style="width: 90%;"> 
        <thead class="thead-dark">
          <tr>
            <th scope="col" class="w-25">Cliente</th>
            <th scope="col" class="w-75">Detalhes</th>
          </tr>
        </thead>
        <tbody class="tbody-dark">
          <?php
            foreach($clients->data as $Client){
              echo "<tr>";
              
              echo "<th scope='col' class='w-25'>". $Client->name . "</th>";
              
              echo "<th scope='col' class='w-75'>";
                echo "CPF: ". $Client->cpf . "<br/>";
                echo "Endereço: ". $Client->address . "<br/>";
                echo "Contato: ". $Client->contact . "<br/>";
                echo "Idade: ". $Client->age . "<br/>";
                echo "Sexo: ". $Client->gender . "<br/>";
              echo "</th";

              echo "</tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

@endsection