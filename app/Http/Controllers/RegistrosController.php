<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registros;

class RegistrosController extends Controller
{
    public function index()
    {
        $registros = Registros::All();
        return view('registros', compact('registros'));
    }
}
