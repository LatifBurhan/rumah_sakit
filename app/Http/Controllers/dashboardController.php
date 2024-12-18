<?php

namespace App\Http\Controllers;

use App\Models\formModel;
use App\Models\kotaModel;
use App\Models\provinsiModel;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $form = formModel::all();
        return view("dasboard", compact("form"));
    }
    public function edit($id)
{
    $form = formModel::findOrFail($id);
    $provinsi = provinsiModel::all();
    $kotas = kotaModel::all(); // Change this to fetch all cities
    return view("edit", compact("form", "provinsi", "kotas"));
}

    public function destroy($id)
    {
        $s = formModel::findOrFail($id);
        $s->delete();
        return redirect()->back();

    }


    public function fetchKota(Request $request)
    {
        $provinsi_id = $request->provinsi_id;

        $kota = kotaModel::where('provinsi_id', $provinsi_id)->get();

        return response()->json($kota);
    }
}
