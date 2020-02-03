@extends('layout.app')

@section('conteudo')
@isset($item)
<p>{{$item}}</p>
<p>senha do banco: @isset($senha) {{$senha}} @endisset </p>
<p>senha do input : {{$n_senha}}</p>
@endisset
    
    <div class="row justify-content-center">
        <img src="{{asset('img/lock.png')}}" alt="" width="50" height="50" style="margin-top:25px">
    </div>
    @include('inc.erros')
    <div class="row justify-content-center">
        <div class="col-md-4 col-offset-md-4 ">
            <form method="POST" action="usuarios_login">
              {{ csrf_field() }}
                <div class="form-group">
                  <label for="usuario">Usuario</label>
                  <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="emailHelp" placeholder="Informer um usuario">
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="senha">Senha</label>
                  <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                </div>        
                <button type="submit" class="btn btn-primary">Login</button>
              </form>
              <a href="criar_usuario">Criar um usuario</a>        

            </div>
      </div>
   
@endsection