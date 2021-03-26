@extends('layouts.plantilla')

@section('title','Curso '.$curso)

@section('content')
    <h1>
        @if($categoria)
            Bienvenido al curso: {{$curso}} de categoria {{$categoria}}
        @else
            Bienvenido al curso: {{$curso}}
        @endif
                
    </h1>  
@endsection