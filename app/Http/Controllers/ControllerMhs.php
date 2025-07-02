<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerMhs extends Controller
{
    public function index()
    {
        //mengambil data dari tabel mahasiswa
        $mahasiswa = DB::table('tblmahasiswa')->get();
        //mengirim data ke view mahasiswa
        return view('index', ['mahasiswa' => $mahasiswa]);
    }

    public function tambahData()
    {
        return view('add');
    }

    public function simpan(Request $request)
    {
        DB::table('tblmahasiswa')->insert([
            'npm' => $request->txtnpm,
            'nama' => $request->txtnama,
            'prodi' => $request->txtprodi,
        ]);
        return redirect('/mhs');
    }

    public function edit($id)
    {
        // mengambil data mahasiswa berdasarkan id yang dipilih
        $mahasiswa = DB::table('tblmahasiswa')->where('id', $id)->get();
        // passing data mahasiswa yang didapat ke view edit.blade.php
        return view('edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request)
    {
        // update data mahasiswa berdasarkan id
        DB::table('tblmahasiswa')->where('id', $request->id)->update([
            'npm' => $request->txtnpm,
            'nama' => $request->txtnama,
            'prodi' => $request->txtprodi,
        ]);
        // alihkan halaman ke halaman mhs
        return redirect('/mhs');
    }

}
