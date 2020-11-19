<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServidorController extends Controller
{
    public function nosotros(){
        return view("servidor.nosotros");
    }

    public function miembros(){
        return view("servidor.miembros");
    }
}
