@extends('templates.base')
@section('title', 'Perfil')
{{-- @section('h1', 'Página de perfil') --}} 

@section('content')

@if (Auth::user()->admin)
    <h1 class="text-center">sou o ademir</h1>
@else
    <h1 class="text-center"> não sou ademir</h1>
@endif
<center>
            <div>
                <h3>{{Auth::user()->nome}}</h3>
                <div><h4>Email: {{Auth::user()->email}}</h4></div>
                <div  ><h4>Usuário:{{Auth::user()->usuario}}</h4></div>
                <a href="{{route('profile.edit')}}"><button  class="btn btn-primary">Editar</button></a>    
        <a href="{{route('profile.password')}}"><button  class="btn btn-warning">Trocar senha</button></a>  
            </div>
        
     
@endsection