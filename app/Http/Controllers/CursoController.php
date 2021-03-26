<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{   
    // se usa convenciones
    public function index(){
        //return "Bienvenido a la pagina de cursos";
        $cursos = Curso::paginate();


        //return $curso; posible api
        return view('cursos.index',compact('cursos')); // subirectorio con punto (.)
    }
    public function create(){
        //return "En esta pagina podras crear un curso";
        return view('cursos.create');
    }

    public function show($id, $categoria = null){

        $curso = Curso::find($id);

        if($categoria){
            //return "bienvenido al curso: $curso, de la categoria: $categoria";    
            return view('cursos.show',['curso' => $curso, 'categoria' => $categoria]); // pasar datos a vista
        }else{
            //return "bienvenido al curso: $curso";    
            return view('cursos.show',['curso' => $curso, 'categoria' => $categoria]); // pasar datos a vista
        }
    }
}
