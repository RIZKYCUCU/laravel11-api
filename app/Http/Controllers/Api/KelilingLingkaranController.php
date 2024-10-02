<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class KelilingLingkaranController extends Controller
{
    public function hitungKelilingLingkaran(Request $request)
    {
        $jarijari = $request->jarijari;
        $hitung = 2 * pi() * $jarijari;

        return new PostResource(true, 'Berhasil hitung Keliling lingkaran!', [
            'hasil' => $hitung
        ]);
    }
}