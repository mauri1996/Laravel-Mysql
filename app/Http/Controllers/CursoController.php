<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{   
    // se usa convenciones
    public function index(){
        //return "Bienvenido a la pagina de cursos";
        return view('cursos.index'); // subirectorio con punto (.)
    }
    public function create(){
        //return "En esta pagina podras crear un curso";
        return view('cursos.create');
    }

    public function show($curso, $categoria = null){
        if($categoria){
            //return "bienvenido al curso: $curso, de la categoria: $categoria";    
            return view('cursos.show',['curso' => $curso, 'categoria' => $categoria]); // pasar datos a vista
        }else{
            //return "bienvenido al curso: $curso";    
            return view('cursos.show',['curso' => $curso, 'categoria' => $categoria]); // pasar datos a vista
        }
    }
}
