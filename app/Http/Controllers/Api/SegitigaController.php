<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class SegitigaController extends Controller
{
    public function hitungSegitiga(Request $request)
    {
        $alas = $request->alas;
        $tinggi = $request->tinggi;
        $hitung = 0.5 * $alas * $tinggi;

        return new PostResource(true, 'Berhasil hitung luas segitiga!', [
            'hasil' => $hitung
        ]);
    }
}