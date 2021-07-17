<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Mahasiswa;
use App\Makul;
// use App\Npm;
// use App\Sks;
use Illuminate\Http\Request;
use Alert;

class nilaiController extends Controller
{

    public function index()
    { 
        // $npm = Npm::all();
        // $sks = Sks::all();
        $nilai = Nilai::with(['mahasiswa', 'makul'])->get(); // select * from nama_tabel
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        $makul = Makul::all();
        return view('nilai.create', compact('mahasiswa', 'makul'));
    }

    public function simpan(request $request)
    {
        Nilai::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan');
        return redirect()->route('nilai');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswa::all();
        $makul = Makul::all();
        $nilai = Nilai::find($id); // select * from nama_tabel where id = $id;
        return view('nilai.edit', compact('nilai', 'mahasiswa', 'makul'));
    }

    public function update(request $request, $id)
    {
        $nilai = nilai::find($id);
        $nilai->update($request->all());
        toast('Yeay Berhasil Mengedit Data','success');
        return redirect()->route('nilai');
    }

    public function hapus($id)
    {
        $nilai = nilai::find($id);
        $nilai->delete();
        toast('Yeay Berhasil Menghapus Data','success');
        return redirect()->route('nilai');
    }
}
