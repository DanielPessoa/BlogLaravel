<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    /**
     * @return string
     */
    public function index()
    {
        return view('contato.index');
    }
}
