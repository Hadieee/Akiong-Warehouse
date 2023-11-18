<?php

namespace App\Http\Controllers\API;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function getBarang()
    {
        $barang = Barang::with('kategori', 'pemasok')->get();
        $response = [
            'status' => 'success',
            'message' => 'Data Berhasil Diambil',
            'data' => $barang
        ];
        return response()->json($response);
    }

    public function createBarang(Request $request)
    {
        $validateData = $request->validate([
            'id_barang' => 'required|string|max:4',
            'kategori_id' => 'required',
            'pemasok_id' => 'required',
            'nama_barang' => 'required|string',
            'stok_barang' => 'required|Integer'
        ]);

        $barang = Barang::create($validateData);

        $respon = [
            'status' => 'success',
            'message' => 'Data Berhasil ditambah',
            'data' => $barang,
        ];

        return response()->json($respon);
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

        $barang->update([
            'id_barang' => $request->id_barang,
            'kategori_id' => $request->kategori_id,
            'pemasok_id' => $request->pemasok_id,
            'nama_barang' => $request->nama_barang,
            'stok_barang' => $request->stok_barang
        ]);

        $respon = [
            'status' => 'success',
            'message' => 'Data Berhasil Diubah',
            'data' => $barang
        ];
        return response()->json($respon);
    }

    public function destroy(Request $request)
    {
        $id = $request->id;
        $barang = Barang::findOrFail($id);
        $barang->delete();
        $respon = [
            'status' => 'success',
            'message' => 'Data Berhasil dihapus',
        ];
        return response()->json($respon);
    }

    public function searchmanager(Request $request)
    {
        $search = $request->input('search');
        $barang = Barang::where('nama_barang', 'like', '%' . $search . '%')->get();
        dd($search);

        $response = [
            'status' => 'success',
            'message' => 'Data Berhasil Ditemukan',
            'data' => $barang,
        ];

        return response()->json($response);
    }

    public function searchadmin(Request $request)
    {
        $search = $request->input('search');

        $barang = Barang::where('nama_barang', 'like', '%' . $search . '%')->get();

        $response = [
            'status' => 'success',
            'message' => 'Data Berhasil Ditemukan',
            'data' => $barang,
        ];

        return response()->json($response);
    }
}
