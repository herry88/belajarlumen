<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Belajar;
use Illuminate\Support\Facades\Validator;

class BelajarController extends Controller
{
    public function index()
    {
        $data = Belajar::all();
        return response()->json([
            'success' => true,
            'msg' => 'Berhasil',
            'data' => $data
        ], 200);
    }

    public function store(Request $request)
    {
        $belajar = Belajar::create($request->all());
        return response()->json([
            'success' => true,
            'msg' => 'Berhasil',
            'data' => $belajar
        ], 200);

    }
}
