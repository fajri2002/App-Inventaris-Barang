<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function post(Request $request)
    {
        $filenameWithExt = $request->file('image')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalExtension();
        $filenameSimpan = $filename.''.time().'.'.$extension;
        $path = $request->file('image')->storeAs('public/posts_image', $filenameSimpan);
        $barang = Barang::create([
            'nama_barang' => $request->nama_barang,
            'jumlah_barang' => $request->jumlah_barang,
            'deskripsi_barang' => $request->deskripsi_barang,
            'kondisi_barang' => $request->kondisi_barang,
            'id_ruang' => $request->id_ruang,
            'image_url' => $filenameSimpan

        ]);
        return redirect('listBarang');
    }
    public function create(Request $request){
        $ruangan = Ruangan::all();
        return view('tambah-barang', compact("ruangan"));
    }

    public function index(Request $request){
        // $barang = Barang::all();
        $barang = Barang::with('ruangan')->get();
        return view('list-barang', compact("barang"));
    }

    public function edit(Request $request, $id){
        $ruangan = Ruangan::all();
        $barang = Barang::find($id);
        return view('edit-barang', compact('barang', 'ruangan'));
    }

    public function update(Request $request, $id) {
        $barang = Barang::find($id);
        $filenameWithExt = $request->file('image')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalExtension();
        $filenameSimpan = $filename.''.time().'.'.$extension;
        $path = $request->file('image')->storeAs('public/posts_image', $filenameSimpan);
        $barang->nama_barang = $request->nama_barang;
        $barang->jumlah_barang = $request->jumlah_barang;
        $barang->deskripsi_barang = $request->deskripsi_barang;
        $barang->kondisi_barang =  $request->kondisi_barang;
        $barang->image_url = $filenameSimpan;
        $barang->id_ruang = $request->id_ruang;
        $barang->save();
        return redirect('listBarang');
    }

    public function delete(Request $request, $id) {
        $barang = Barang::find($id);
        $barang->delete();
        return redirect('listBarang');
    }

}
