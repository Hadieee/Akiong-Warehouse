<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Barang;

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

    public function download_excel()
    {
        // Retrieve data from the database
        $kategoris = Kategori::all();

        // Generate Excel content
        $content = "ID kategori\tNama kategori\n";

        foreach ($kategoris as $kategori) {
            $content .= "{$kategori->id_kategori}\t{$kategori->nama_kategori}\n";
        }

        // Set headers for download
        $headers = [
            'Content-type' => 'application/vnd.ms-excel',
            'Content-Disposition' => 'attachment; filename=kategori_data.xls',
            'Pragma' => 'no-cache',
            'Expires' => '0',
        ];
        // Output content to the browser
        return response()->make($content, 200, $headers);
    }

    public function searchKategorimanager(Request $request)
    {
        $search = $request->input('search');

        $kategori = Kategori::where('nama_kategori', 'like', '%' . $search . '%')->get();

        return view('manager.kategori', compact('kategori'));
    }

    public function searchKategoriadmin(Request $request)
    {
        $search = $request->input('search');

        $kategori = Kategori::where('nama_kategori', 'like', '%' . $search . '%')->get();

        return view('admin.kategori', compact('kategori'));
    }
}
