<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerMatakuliah extends Controller
    {
        public function matakuliah()
        {
            //mengambil data dari tabel mahasiswa
            $matakuliah = DB::table('tblmatakuliah')->get();
            //mengirim data ke view mahasiswa
            return view('matakuliah', ['matakuliah' => $matakuliah]);
        }
    
        public function tambahData()
        {
            return view('addmatkul');
        }
    
        public function simpan(Request $request)
        {
            DB::table('tblmatakuliah')->insert([
                'kode_matakuliah' => $request->txtkode_matakuliah,
                'matakuliah' => $request->txtmatakuliah,
            ]);
            return redirect('/matakuliah');
        }
    }
