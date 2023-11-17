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
}
