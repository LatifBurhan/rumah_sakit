<?php

namespace App\Http\Controllers;

use App\Models\formModel;
use Illuminate\Http\Request;

class formController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'pendapatan' => 'required',
            'provinsi_id' => 'required',
            'kota_id' => 'required',
            'alamat' => 'required',
            'alergi' => 'nullable',
            'golongan_darah' => 'required',
        ], [
            'name.required' => 'Nama harus diisi.',
            'pendapatan.required' => 'Pendapatan harus diisi.',
            'provinsi_id.required' => 'Provinsi harus dipilih.',
            'kota_id.required' => 'Kota harus dipilih.',
            'alamat.required' => 'Alamat lengkap harus diisi.',
            'golongan_darah.required' => 'Golongan darah harus dipilih.',
        ]);

        // Proses pendapatan dan alergi
        $pendapatan = str_replace('.', '', $request->pendapatan); // Hapus titik dari pendapatan
        $alergi = $request->alergi ? implode(',', $request->alergi) : null; // Gabungkan alergi menjadi string

        // Simpan data ke database
        FormModel::create([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'alergi' => $alergi,
            'provinsi_id' => $request->provinsi_id,
            'kota_id' => $request->kota_id,
            'pendapatan' => $pendapatan,
            'golongan_darah' => $request->golongan_darah,
        ]);

        return redirect()->back()->with('success', 'Data berhasil disimpan.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'pendapatan' => 'required',
            'provinsi_id' => 'required',
            'kota_id' => 'required',
            'alamat' => 'required',
            'alergi' => 'nullable|array',
            'golongan_darah' => 'required',
        ]);

        $form = FormModel::findOrFail($id);

        $pendapatan = str_replace('.', '', $request->pendapatan); // Hapus titik dari pendapatan
        $alergi = $request->alergi ? implode(',', $request->alergi) : null; // Gabungkan alergi menjadi string

        // Update data
        $form->update([
            'name' => $request->name,
            'alamat' => $request->alamat,
            'alergi' => $alergi,
            'provinsi_id' => $request->provinsi_id,
            'kota_id' => $request->kota_id,
            'pendapatan' => $pendapatan,
            'golongan_darah' => $request->golongan_darah,
        ]);

        return redirect()->route('dashboard')->with('success', 'Data berhasil diperbarui.');
    }


}
