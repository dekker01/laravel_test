<?php

namespace App\Http\Controllers;

use App\Registrasi;
use Illuminate\Http\Request;

class RegistrasiController extends Controller
{

    public function index()
    {
        $registrasi = registrasi::all();
        return view('registrasi.index', ['registrasi' => $registrasi]);
    }

    public function create()
    {
        return view('registrasi.create');
    }


    public function store(Request $request)
    {

        // Validasi
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'handphone' => 'required|size:12',
            'password' => 'required',
            'alamat' => 'required',
        ]);
        // Save
        Registrasi::create($request->all());
        return redirect('/registrasi')->with('status', 'Data Registrasi Berhasil di Simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */

    public function show(registrasi $registrasi)
    {
        return view('registrasi.show', compact('registrasi'));
    }


    public function edit(registrasi $registrasi)
    {
        return view('registrasi.edit', compact('registrasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registrasi $registrasi)
    {
        // Validasi
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'handphone' => 'required|size:12',
            'password' => 'required',
            'alamat' => 'required',
        ]);

        registrasi::where('id', $registrasi->id)
            ->update([
                'nama' => $request->nama,
                'email' => $request->email,
                'handphone' => $request->handphone,
                'password' => $request->password,
                'alamat' => $request->alamat
            ]);
        return redirect('/registrasi')->with('status', 'Data Berhasil di Edit Kawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\registrasi  $registrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(registrasi $registrasi)
    {
        registrasi::destroy($registrasi->id);
        return redirect('/registrasi')->with('status', 'Data Berhasil Di Hapus');
    }
}
