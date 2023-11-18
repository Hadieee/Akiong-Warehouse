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
    public function index()
    {
        // Check user role
        $userRole = auth()->user()->role;

        // Set endpoint based on user role
        if ($userRole == 'admin') {
            $endpoint = env('BASE_ENV') . '/api/admin/data/barang';
            $data = Http::get($endpoint);

            return view('admin.barang', [
                'barang' => $data
            ]);
        } elseif ($userRole == 'manager') {
            $endpoint = env('BASE_ENV') . '/api/manager/data/barang';
            $data = Http::get($endpoint);

            return view('manager.barang', [
                'barang' => $data
            ]);
        } else {
            abort(403, 'Unauthorized action.');
        }
    }


    public function tambah()
    {
        return view('admin.crud.addBarang', [
            'kategoris' => Kategori::all(),
            'pemasoks' => Pemasok::all(),
        ]);
    }

    public function store(Request $request)
    {
        $endpoint = env('BASE_ENV') . '/api/admin/data/barang/tambah';

        // Validate Input
        $validateData = $request->validate([
            'id_barang' => 'required|string|max:4',
            'kategori_id' => 'required',
            'pemasok_id' => 'required',
            'nama_barang' => 'required|string',
            'stok_barang' => 'required|Integer'
        ]);

        $response = Http::asForm()->post($endpoint, $validateData);

        // Periksa apakah respons memiliki status dan pesan
        if (isset($response['status']) && isset($response['message'])) {
            session()->flash('success', 'Data Barang Berhasil Ditambah!');
            return redirect()->route('admin.barang')->with($response['status'], $response['message']);
        } else {
            // Handle kesalahan jika respons tidak sesuai
            session()->flash('error', 'Gagal Menambahkan Data Barang.');
            return redirect()->route('admin.barang');
        }
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
        $endpoint = env('BASE_ENV') . '/api/admin/data/barang/edit/' . $id;

        $validateData = $request->validate([
            'id_barang' => 'required|string|max:4',
            'kategori_id' => 'required',
            'pemasok_id' => 'required',
            'nama_barang' => 'required|string',
            'stok_barang' => 'required|Integer'
        ]);

        $response = Http::asForm()->post($endpoint, $validateData);

        // Periksa apakah respons memiliki status dan pesan
        if (isset($response['status']) && isset($response['message'])) {
            session()->flash('success', 'Data Barang Berhasil Diedit!');
            return redirect()->route('admin.barang')->with($response['status'], $response['message']);
        } else {
            // Handle kesalahan jika respons tidak sesuai
            session()->flash('error', 'Gagal Mengedit Data Barang.');
            return redirect()->route('admin.barang');
        }
    }

    public function delete($id)
    {
        $endpoint = env('BASE_ENV') . '/api/admin/data/barang/hapus';

        $response = Http::asForm()->post($endpoint, ['id' => $id]);

        // Periksa apakah respons memiliki status dan pesan
        if (isset($response['status']) && isset($response['message'])) {
            session()->flash('success', 'Data Barang Berhasil Dihapus!');
            return redirect()->route('admin.barang')->with($response['status'], $response['message']);
        } else {
            // Handle kesalahan jika respons tidak sesuai
            session()->flash('error', 'Gagal Menghapus Data Barang.');
            return redirect()->route('admin.barang');
        }
    }

    public function download_excel()
    {
        // Retrieve data from the database
        $barangs = Barang::all();

        // Generate Excel content
        $content = "ID barang\tKategori barang\tPemasok barang\tNama barang\tStok barang\n";

        foreach ($barangs as $barang) {
            $content .= "{$barang->id_barang}\t{$barang->kategori->nama_kategori}\t{$barang->pemasok->nama_pemasok}\t{$barang->nama_barang}\t{$barang->stok_barang}\n";
        }

        // Set headers for download
        $headers = [
            'Content-type' => 'application/vnd.ms-excel',
            'Content-Disposition' => 'attachment; filename=barang_data.xls',
            'Pragma' => 'no-cache',
            'Expires' => '0',
        ];
        // Output content to the browser
        return response()->make($content, 200, $headers);
    }
}
