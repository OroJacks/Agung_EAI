<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\cekstok;
use Exception;
use Illuminate\Http\Request;

class cekstokController extends Controller
{

    public function show($id)
    {
        $data = cekstok::where('kode_barang', '=', $id)->get();

        if ($data) {
            return ApiFormatter::createApi(200, 'Success', $data);
        } else {
            return ApiFormatter::createApi(400, 'Failed');
        }
    }

    public function update(Request $request, $kode_barang)
{
    try {
        $validatedData = $request->validate([
            'nama_barang' => 'required|string',
            'stok' => 'required|integer',
            'quality' => 'required|string',
        ]);

        $data = cekstok::where('kode_barang', $kode_barang)->first();
        if (!$data) {
            return ApiFormatter::createApi(404, 'Barang tidak ditemukan');
        }

        $data->update($validatedData);

        return ApiFormatter::createApi(200, 'Barang updated successfully', $data);
    } catch (Exception $e) {
        \Log::error($e);  // ini akan mencatat pengecualian ke log Laravel
        return ApiFormatter::createApi(500, 'Internal Server Error: ' . $e->getMessage());
    }    
    }
}