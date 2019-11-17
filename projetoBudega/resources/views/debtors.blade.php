@extends('layouts.app')

@section('content')

      <h3 class="p-3">Dívidas</h3>
      <table class="table m-auto" style="width: 90%;"> 
        <thead class="thead-dark">
          <tr>
            <th scope="col" class="w-25">Cliente</th>
            <th scope="col" class="w-75">Detalhes</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">MCH_AGG</th>
            <td>
              Total:<br/>
              Data:<br/>
              <a href="#model" class="btn btn-secondary float-right">Ver mais</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endsection