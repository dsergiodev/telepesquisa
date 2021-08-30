<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Empresa;
use App\Models\Cidade;


class CidadeController extends Controller
{
    public function tudo(){
        $cidade = Cidade::all();

        return view('cidades2', ['cidade' => $cidade]);
    }

    public function show(Request $request) {
        $city = $request->city;
        $emp  = $request->empresa;
        
        if( is_null($city) ){  //se não escolher a cidade, exibir todas as empresas
            $cidade = Cidade::all();

            $empresa = DB::table('empresas')
            ->select('empresas.name', 'empresas.phone', 'empresas.description', 'empresas.banner')
            ->join('cidades', 'empresas.city_id', '=', 'cidades.id')
            ->where('empresas.name', 'LIKE', '%'.$emp.'%')->paginate(5);

            return view('cidades', ['cidade' => $cidade, 'empresa' => $empresa]);
        } else{  //se não escolher a empresa, exibir todas as empresas da cidade escolhida
            $cidade = Cidade::all();

            $empresa = DB::table('empresas')
            ->select('empresas.name', 'empresas.phone', 'empresas.description', 'empresas.banner')
            ->where('empresas.city_id', '=', $city)->paginate(5);

            return view('cidades', ['cidade' => $cidade, 'empresa' => $empresa]);
        }
    }
}