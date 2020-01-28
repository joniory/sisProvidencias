<?php

namespace App\Http\Controllers\Seguridades;

use Illuminate\Http\Request;

class usuarioAgenciaPerfilController
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/Seguridades/usuarioAgenciaPerfil');
    }
}
