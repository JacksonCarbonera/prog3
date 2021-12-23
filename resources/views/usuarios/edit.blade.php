@extends('templates.base')
@section('title', 'Perfil')
{{-- @section('h1', 'Página de perfil') --}} 

@section('content')

<form method="post" action="{{ route('profile.saveEdit') }}">
    <div class="row p-4" style="box-shadow: 5px 5px 15px 5px rgba(0,0,0,0.34);">
        @csrf
<div>
<div>Nome</div>
                        <div ><input  class="form-control"  value="{{Auth::user()->nome}}"type="text" name="nome"/></div>
                        <div>Email</div>
                        <div><input class="form-control" value="{{Auth::user()->email}}" type="email" name="email"/></div>
                        <div>Usuário</div>
                        <div ><input class="form-control" value="{{Auth::user()->usuario}}" type="text" name="usuario" /></div>
                        <button type="submit" class="btn btn-primary mt-3">Salvar</button>
</div>

</form>
@endsection