@extends('layout.app')

@section('conteudo')
    @isset($item)
        {{$item}}
    @endisset
    <div class="row justify-content-center">
        <img src="{{asset('img/lock.png')}}" alt="" width="50" height="50" style="margin-top:25px">
    </div>
    @include('inc.erros')
    <div class="row justify-content-center">
        <div class="col-md-4 col-offset-md-4 ">
            <form method="POST" action="fazer_login">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="usuario">Usuario</label>
                  <input type="text" class="form-control" name="usuario" id="usuario"placeholder="Informer o usuario">
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                    <label for="senha">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                  </div> 
                <div class="form-group">
                  <label for="senha">Senha</label>
                  <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                </div>     
                <div class="form-group">
                    <label for="senha">Confirmar Senha</label>
                    <input type="password" class="form-control" name="cf_senha" id="senha" placeholder="Confirmar senha">
                  </div>    
                <button type="submit" class="btn btn-primary">Salvar</button>
              </form>
            </div>        
      </div>
   
@endsection