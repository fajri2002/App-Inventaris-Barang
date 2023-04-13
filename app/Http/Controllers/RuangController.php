<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruangan;

class RuangController extends Controller
{
    public function create(Request $request)
    {
        $ruangan = Ruangan::create([
            'nama_ruangan' => $request->nama_ruangan
        ]);
        return redirect('/listRuang');
    }

    public function index(){
        $ruangan = Ruangan::all();
        return view('list-ruang', compact("ruangan"));
    }
}
