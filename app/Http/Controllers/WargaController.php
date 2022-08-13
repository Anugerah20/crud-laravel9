<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    // Menampilkan data warga
    public function index(){
        $warga = Warga::all();
        return view('warga.index',compact(['warga']));
    }

    // Menambahkan Warga
    public function create(){
        return view('warga.create');
    }

    // Menangkap data yg di masukan user
    public function store(Request $request){
        //dd($request->except('_token','submit'));
        Warga::create($request->except('_token','submit'));
        return redirect('/warga');
    }

    // Edit data warga
    public function edit($id){
        $warga = Warga::find($id);
        // dd($warga);
        return view('warga.edit',compact(['warga']));
    }

    // Update data warga
    public function update($id, Request $request) {
        $warga = Warga::find($id);
        $warga->update($request->except('_token','submit'));
        return redirect('/warga');
    }

    // Hapus data warga
    public function destroy($id){
        $warga = Warga::find($id);
        $warga->delete();
        return redirect('/warga');
    }
}
