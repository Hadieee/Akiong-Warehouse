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
        return view('manager.crud.addPemasok', [
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
        return redirect()->route('manager.pemasok');
    }

    public function edit($id)
    {
        return view('manager.crud.editPemasok', [
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
        return redirect()->route('manager.pemasok');
    }


    public function delete($id)
    {
        $pemasok = Pemasok::findOrFail($id);

        // Hapus terlebih dahulu barang yang terkait dengan pemasok
        $pemasok->barang()->delete();

        $pemasok->delete();

        session()->flash('success', 'Data Pemasok Berhasil Dihapus!');
        return redirect()->route('manager.pemasok');
    }

    public function download_excel()
    {
        // Retrieve data from the database
        $pemasoks = Pemasok::all();

        // Generate Excel content
        $content = "ID pemasok\tNama Pemasok\tNomor Telepon Pemasok\n";

        foreach ($pemasoks as $pemasok) {
            $content .= "{$pemasok->id_pemasok}\t{$pemasok->nama_pemasok}\t{$pemasok->no_telepon}\n";
        }

        // Set headers for download
        $headers = [
            'Content-type' => 'application/vnd.ms-excel',
            'Content-Disposition' => 'attachment; filename=pemasok_data.xls',
            'Pragma' => 'no-cache',
            'Expires' => '0',
        ];
        // Output content to the browser
        return response()->make($content, 200, $headers);
    }
}
