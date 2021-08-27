<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Cidade;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function tudo(){
        $cidade = Cidade::all();
        $empresa = Empresa::all();
        return view('cidades', ['cidade' => $cidade, 'empresa' => $empresa]);
        }


    public function city($city){
        $cidade = Cidade::all();
        $empresa = Empresa::select(['name', 'phone', 'description', 'banner'])->where('city_id', $city)->get();
        return view('cidades', ['cidade' => $cidade, 'empresa' => $empresa]);
    }
}
