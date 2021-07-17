<?php

namespace App\Http\Controllers;

use App\Makul;
use Illuminate\Http\Request;
Use Alert;

class MakulController extends Controller
{


    public function index()
    { 
        $makul = Makul::all(); // select * from nama_tabel
        return view('makul.index', compact('makul'));
    }

    public function create()
    {
        return view('makul.create');
    }

    public function simpan(request $request)
    {
        Makul::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan');
        return redirect()->route('makul');
    }

    public function edit($id)
    {
        $makul = Makul::find($id); // select * from nama_tabel where id = $id;
        return view('makul.edit', compact('makul'));
    }

    public function update(request $request, $id)
    {
        $makul = Makul::find($id);
        $makul->update($request->all());
        toast('Yeay Berhasil Mengedit Data','success');
        return redirect()->route('makul');
    }

    public function hapus($id)
    {
        $makul = Makul::find($id);
        $makul->delete();
        toast('Yeay Berhasil Menghapus Data','success');
        return redirect()->route('makul');
    }
}
