<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Empresa;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function tudo(){
	$categorie = Categorie::all();
    $empresa = Empresa::all();
	return view('categorias', ['categorie' => $categorie, 'empresa' => $empresa]);
    }

    public function categoria($name){
        $categorie = Categorie::all();
        $empresa = Empresa::select(['name', 'phone', 'description', 'banner'])->where('category_id', $name)->get();
        return view('categorias', ['categorie' => $categorie, 'empresa' => $empresa]);
    }
}