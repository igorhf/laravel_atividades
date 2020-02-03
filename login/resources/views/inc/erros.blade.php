<div class="row justify-content-center">
<ul>
@if (count($errors))
      @foreach ($errors->all() as $erro)

        <li class="alert alert-danger">{{$erro}}</li>
      @endforeach
    @endif
</ul>
</div>