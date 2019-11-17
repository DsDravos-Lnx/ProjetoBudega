@extends('layouts.app')

@section('content')
      <h3 class="p-3">Compras</h3>
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
              <a href="#model" class="btn btn-secondary float-right" data-toggle="modal" data-target="#verCompra">Ver mais</a>
              <!-- Modal -->
              <div class="modal fade" id="verCompra" tabindex="-1" role="dialog" aria-labelledby="verCompraLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="verCompraLabel">Compra </h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <label for="" class="col-form-label">Nome:</label>
                      <input type="text" name="" class="form-control">
                      <label for="" class="col-form-label">CPF:</label>
                      <input type="text" name="" class="form-control">
                      <label for="" class="col-form-label">Contato:</label>
                      <input type="text" name="" class="form-control">
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                      <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                  </div>
                </div>
              </div>

            </td>
          </tr>
        </tbody>
      </table>

    </div>
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
@endsection