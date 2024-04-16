<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use App\Models\Productos;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $clientes=Clientes::all();

        return view('index',['clientes'=> $clientes]);
        
    } 

    public function producto (){
        $productos=Productos::all();
        return view('producto',['productos'=>$productos]);
        
    }
}
