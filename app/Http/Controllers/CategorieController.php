<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Empresa;
use App\Models\Categorie;

class CategorieController extends Controller{
    public function tudo(){
    $categorie = Categorie::all();
    
	return view('categorias2', ['categorie' => $categorie]);
    }


    public function show(Request $request) {
        $category = $request->category;
        $emp  = $request->empresa;
        
        if( is_null($category) ){  //se não escolher a categoria, exibir todas as empresas
            $categorie = Categorie::all();

            $empresa = DB::table('empresas')
            ->select('empresas.name', 'empresas.phone', 'empresas.description', 'empresas.banner')
            ->join('categories', 'categories.id', '=', 'empresas.category_id')
            ->where('empresas.name', 'LIKE', '%'.$emp.'%')->paginate(5);

            return view('categorias', ['categorie' => $categorie, 'empresa' => $empresa]);
        } else{  //se não escolher o nome da empresa, exibir todas as empresas da categoria escolhida
            $categorie = Categorie::all();

            $empresa = DB::table('empresas')
            ->select('empresas.name', 'empresas.phone', 'empresas.description', 'empresas.banner')
            ->where('empresas.category_id', '=', $category)->paginate(5);

            return view('categorias', ['categorie' => $categorie, 'empresa' => $empresa]);
        }
    }
}