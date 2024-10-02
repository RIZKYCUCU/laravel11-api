<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class KelilingSegitigaController extends Controller
{
    public function hitungKelilingSegitiga(Request $request)
    {
        $sisi1 = $request->sisi1;
        $sisi2 = $request->sisi2;
        $sisi3 = $request->sisi3;
        $hitung = $sisi1 + $sisi2 + $sisi3;

        return new PostResource(true, 'Berhasil hitung keliling segitiga!', [
            'hasil' => $hitung
        ]);
    }
}