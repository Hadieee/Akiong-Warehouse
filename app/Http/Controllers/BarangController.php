<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pemasok;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class BarangController extends Controller
{
    public function tambah()
    {
        return view('admin.crud.addBarang', [
            'kategoris' => Kategori::all(),
            'pemasoks' => Pemasok::all(),
        ]);
    }

    public function store(Request $request)
    {
        // Validate Input
        $validateData = $request->validate([
            'id_barang' => 'required|string|max:4',
            'kategori_id' => 'required',
            'pemasok_id' => 'required',
            'nama_barang' => 'required|string',
            'stok_barang' => 'required|Integer'
        ]);

        Barang::create($validateData);

        session()->flash('success', 'Data Barang Berhasil Ditambah!');
        return redirect()->route('admin.barang');
    }

    public function edit($id)
    {
        return view('admin.crud.editBarang', [
            'barangs' => Barang::all()->where('id', $id)->first(),
            'kategoris' => Kategori::all(),
            'pemasoks' => Pemasok::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_barang' => 'required|string|max:4',
            'kategori_id' => 'required',
            'pemasok_id' => 'required',
            'nama_barang' => 'required|string',
            'stok_barang' => 'required|Integer'
        ]);

        $barang = Barang::findOrFail($id);

        $barang->id_barang = $request->id_barang;
        $barang->kategori_id = $request->kategori_id;
        $barang->pemasok_id = $request->pemasok_id;
        $barang->nama_barang = $request->nama_barang;
        $barang->stok_barang = $request->stok_barang;

        // Simpan perubahan
        $barang->save();

        session()->flash('success', 'Data Barang Berhasil Diubah!');
        return redirect()->route('admin.barang');
    }

    public function delete($id)
    {
        $barang = Barang::findOrFail($id);

        $barang->delete();

        session()->flash('success', 'Data Barang Berhasil Dihapus!');
        return redirect()->route('admin.barang');
    }

    public function index()
    {
        $endpoint = env('BASE_ENV') . '/api/admin/data/barang';
        $data = Http::get($endpoint);
        return view('admin.barang', [
            'barang' => $data
        ]);
    }
}
