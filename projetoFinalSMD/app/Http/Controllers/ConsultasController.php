<?php

namespace App\Http\Controllers;

use App\Models\TbConsulta;
use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    public function index()
    {
        //dd('ola');

        $consultas=TbConsulta::all();
        //dd($consultas);
        return view('menu_doutor.consultas', ['consultas'=>$consultas]);

        // $nome = 'Isabel';
        // return view ('menu_doutor.consultas', ['nome'=>$nome]);
   }
}
