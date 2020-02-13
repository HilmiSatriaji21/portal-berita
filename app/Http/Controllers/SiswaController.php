<?php

namespace App\Http\Controllers;

use App\Siswa;
use Session;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data = Siswa::all();
        return view ('siswa.index', compact('data'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $siswa = new Siswa;
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->save();
        // dd($siswa);
        return redirect()->route('siswa.index')
            ->with(['massage' => 'Data Siswa Berhasil Di Simpan']);
    }

    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.show', compact('siswa'));
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('siswa'))
        ->with(['massage' => 'Data Tabungan Berhasil Di Edit']);
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->save();
        return redirect()->route('siswa.index')
        ->with(['massage' => 'Data Tabungan Berhasil Di Edit']);
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index')
            ->with(['success' => 'Data Siswa Berhasil Dihapus']);
    }
}
