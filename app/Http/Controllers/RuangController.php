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

    public function edit(Request $request, $id){
        $ruangan = Ruangan::find($id);
        return view('edit-ruang', compact('ruangan'));
    }

    public function update(Request $request, $id) {
        $ruangan = Ruangan::find($id);
        $ruangan->nama_ruangan = $request->nama_ruangan;
        $ruangan->save();
        return redirect('listRuang');
    }

    public function delete(Request $request, $id) {
        $ruangan = Ruangan::find($id);
        $ruangan->delete();
        return redirect('listRuang');
    }
}
