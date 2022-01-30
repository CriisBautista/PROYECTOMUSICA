<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class musicaController extends Controller
{
    public function index()
    {
        return view('index');

    }

    public function iniciosTrap()
    {
        return view('iniciostrap');
    }

    public function evolucion()
    {
        return view('evolucion');
    }

    public function quintoEscalon()
    {
        return view('quintoescalon');
    }

    public function artistasMasculinos()
    {
        return view('artistasmasculinos');
    }

    public function artistasFemeninos()
    {
        return view('artistasFemeninos');
    }

    public function canciones2021()
    {
        return view('canciones2021');
    }
}
