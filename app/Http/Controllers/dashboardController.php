<?php

namespace App\Http\Controllers;

use App\Models\kotaModel;
use App\Models\provinsiModel;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $provinsi = provinsiModel::all();
        return view("form", compact("provinsi"));
    }

    public function fetchKota(Request $request)
    {
        $provinsi_id = $request->provinsi_id;

        $kota = kotaModel::where('provinsi_id', $provinsi_id)->get();

        return response()->json($kota);
    }
}
