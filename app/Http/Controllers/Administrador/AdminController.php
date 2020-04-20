<?php

namespace App\Http\Controllers\Administrador;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Persona;

class AdminController extends Controller
{
    public function index(){

        $personas = Persona::orderBy('id', 'DESC')->paginate(5);

        return view('admin.personas', compact('personas'));
    }
}
