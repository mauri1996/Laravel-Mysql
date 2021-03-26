@extends('layouts.plantilla')

@section('title','Curso '.$curso->name)

@section('content')
    <h1>        
        Bienvenido al curso: {{$curso->name}} de categoria {{$categoria}}        
    </h1>  
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <p><strong>Categoria: </strong> {{$curso->category}} </p>
    <p> {{$curso->description}}<</p>
@endsection