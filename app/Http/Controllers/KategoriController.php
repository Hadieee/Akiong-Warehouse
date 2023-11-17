<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Pemasok;

class KategoriController extends Controller
{
    //
    public function tambah()
    {
        return view('manager.crud.addKategori', [
            'kategoris' => Kategori::all()
        ]);
    }

    public function store(Request $request)
    {
        // Validate Input
        $validateData = $request->validate([
            'id_kategori' => 'required|string|max:4',
            'nama_kategori' => 'required|string'
        ]);

        Kategori::create($validateData);

        session()->flash('success', 'Data Kategori Berhasil Ditambah!');
        return redirect()->route('manager.kategori');
    }

    public function edit($id)
    {
        return view('manager.crud.editKategori', [
            'kategoris' => Kategori::all()->where('id', $id)->first(),
            'barangs' => Barang::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_kategori' => 'required|string|max:10',
            'nama_kategori' => 'required|string',
        ]);

        $kategori = Kategori::findOrFail($id);

        $kategori->id_kategori = $request->id_kategori;
        $kategori->nama_kategori = $request->nama_kategori;

        // Simpan perubahan
        $kategori->save();

        session()->flash('success', 'Data Kategori Berhasil Diubah!');
        return redirect()->route('manager.kategori');
    }


    public function delete($id)
    {
        $kategori = Kategori::findOrFail($id);

        // Hapus terlebih dahulu barang yang terkait dengan kategori
        $kategori->barang()->delete();

        $kategori->delete();

        session()->flash('success', 'Data Kategori Berhasil Dihapus!');
        return redirect()->route('manager.kategori');
    }
}
