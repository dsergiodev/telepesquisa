<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Empresa;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index(){
	$categorie = Categorie::all();
    $empresa = Empresa::all();
	return view('categorias', ['categorie' => $categorie, 'empresa' => $empresa]);
    }
}

