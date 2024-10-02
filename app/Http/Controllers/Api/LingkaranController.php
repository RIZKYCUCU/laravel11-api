<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class LingkaranController extends Controller
{
    public function hitungLingkaran(Request $request)
    {
        $jarijari = $request->jarijari;
        $hitung = pi() * pow($jarijari, 2);

        return new PostResource(true, 'Berhasil hitung luas lingkaran!', [
            'hasil' => $hitung
        ]);
    }
}