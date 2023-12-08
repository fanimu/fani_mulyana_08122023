<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;
use File;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.index', compact('pegawai'));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pegawai_nama' => 'required',
            'pegawai_umur' => 'required|numeric',
            'pegawai_alamat' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi jenis dan ukuran file
        ]);

        $input = $request->all();

        // Handle file upload
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
            $input['foto'] = 'uploads/' . $fileName;
        }

        Pegawai::create($input);

        return redirect()->route('pegawai.index');
    }

    public function show($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.show', compact('pegawai'));
    }

    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pegawai_nama' => 'required',
            'pegawai_umur' => 'required|numeric',
            'pegawai_alamat' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi jenis dan ukuran file
        ]);

        $pegawai = Pegawai::findOrFail($id);
        $input = $request->all();

        // Handle file upload
        if ($request->hasFile('foto')) {
            // Hapus file foto lama jika ada
            if (File::exists(public_path($pegawai->foto))) {
                File::delete(public_path($pegawai->foto));
            }

            $file = $request->file('foto');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);
            $input['foto'] = 'uploads/' . $fileName;
        }

        $pegawai->update($input);

        return redirect()->route('pegawai.index');
    }

    public function destroy($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();
        return redirect()->route('pegawai.index');
    }
}
