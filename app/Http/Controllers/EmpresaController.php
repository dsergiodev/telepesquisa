<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Http\Requests;

class EmpresaController extends Controller
{
    public function index(){
	    $empresa = Empresa::paginate(5);
	return view('empresas', ['empresa' => $empresa]);
    }

}
