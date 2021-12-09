<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registros;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }

    public function store(Request $request){
        
        if($request->hasFile('foto')){
            // Get filename with the extension
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('foto')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('foto')->storeAs('public\registros', $fileNameToStore);
            //dd($path);
        } else {
            $fileNameToStore = 'noimage.png';
        }
        $req = $request->all();
        $req['foto'] = $fileNameToStore;

        Registros::create([
            'foto' =>  $fileNameToStore,
            'nome' => $request->nome,
            'cpf' => $request->cpf
        ]);

        return view('home');
    }
}
