<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    //Lista
    public function lista(){
        $data['articles']=Article::paginate(10);

        return view('articulos.lista', $data);
    }



    //Formulario para agregar
    public function articleslist(){
        return view('articulos.articlesview');
    }

    //Guardar articulo
    public function guardar(Request $request){

        $validar=$this->validate($request, [
            'nombre'=> 'required|string|max:255',
            'tipo'=> 'required|string|max:255',
            'cantidad'=> 'required|integer',
            'coste'=> 'required|integer',
        ]);

        $articledata = request()->except('_token');
        Article::insert($articledata);

        return back()->with('articuloGuardado', 'Articulo guardado con éxito');

    }

    //Borrar articulos
    public function borrar($id){
        Article::destroy($id);

        return back()->with('articuloBorrado', 'Articulo borrado con éxito');
    }

   //Editar
   public function editform($id){
        $article=Article::findOrFail($id);

        return view('articulos.editform', compact('article'));
   }

   public function edit(Request $request, $id){
       $articledata= request()->except((['_token', '_method']));
       Article::where('id', '=', $id)->update($articledata);

       return back()->with('articuloEditado', 'Articulo modificado con éxito');
   }
}
