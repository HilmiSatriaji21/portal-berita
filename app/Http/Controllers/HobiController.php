<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hobi;
use Session;
class HobiController extends Controller
{
    public function index()
    {
        $data = Hobi::all();
        return view ('hobi.index', compact('data'));
    }

    public function create()
    {
        return view('hobi.create');
    }

    public function store(Request $request)
    {
        $hobi = new Hobi;
        $hobi->hobi = $request->hobi;
        $hobi->save();
        // dd($siswa);
        return redirect()->route('hobi.index')
            ->with(['massage' => 'Data Hobi Siswa Berhasil Di Simpan']);
    }

    public function show($id)
    {
        $hobi = Hobi::findOrFail($id);
        return view('hobi.show', compact('hobi'));
    }

    public function edit($id)
    {
        $hobi = Hobi::findOrFail($id);
        return view('hobi.edit', compact('hobi'))
        ->with(['massage' => 'Data Hobi Siswa Berhasil Di Edit']);
    }

    public function update(Request $request, $id)
    {
        $hobi = Hobi::findOrFail($id);
        $hobi->hobi = $request->hobi;
        $hobi->save();
        return redirect()->route('hobi.index')
        ->with(['massage' => 'Data Hobi Siswa Berhasil Di Edit']);
    }

    public function destroy($id)
    {
        $hobi = Hobi::findOrFail($id);
        $hobi->delete();
        return redirect()->route('hobi.index')
            ->with(['success' => 'Data Hobi Siswa Berhasil Dihapus']);
    }
}
