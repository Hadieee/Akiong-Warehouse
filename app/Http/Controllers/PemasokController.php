<?php

namespace App\Http\Controllers;

use App\Models\Pemasok;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Barang;

class PemasokController extends Controller
{
    public function tambah()
    {
        return view('admin.crud.addPemasok', [
            'pemasoks' => Pemasok::all()
        ]);
    }

    public function store(Request $request)
    {
        // Validate Input
        $validateData = $request->validate([
            'id_pemasok' => 'required|string|max:4',
            'nama_pemasok' => 'required|string',
            'no_telepon' => 'required|string'
        ]);

        Pemasok::create($validateData);

        session()->flash('success', 'Data Pemasok Berhasil Ditambah!');
        return redirect()->route('admin.pemasok');
    }

    public function edit($id)
    {
        return view('admin.crud.editPemasok', [
            'pemasoks' => Pemasok::all()->where('id', $id)->first(),
            'barangs' => Barang::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pemasok' => 'required|string|max:10',
            'nama_pemasok' => 'required|string',
            'no_telepon' => 'required|string'
        ]);

        $pemasok = Pemasok::findOrFail($id);

        $pemasok->id_pemasok = $request->id_pemasok;
        $pemasok->nama_pemasok = $request->nama_pemasok;
        $pemasok->no_telepon = $request->no_telepon;

        // Simpan perubahan
        $pemasok->save();

        session()->flash('success', 'Data Pemasok Berhasil Diubah!');
        return redirect()->route('admin.pemasok');
    }


    public function delete($id)
    {
        $pemasok = Pemasok::findOrFail($id);

        // Hapus terlebih dahulu barang yang terkait dengan pemasok
        $pemasok->barang()->delete();

        $pemasok->delete();

        session()->flash('success', 'Data Pemasok Berhasil Dihapus!');
        return redirect()->route('admin.pemasok');
    }
}
