<?php

namespace App\Http\Controllers\Seguridades;

use Illuminate\Http\Request;

class usuariosController
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/Seguridades/usuarios');
    }
}
