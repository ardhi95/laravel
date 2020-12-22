<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        return Siswa::all();
    }

    public function create(request $request)
    {
        $siswa  = new Siswa;
        $siswa->nama    =   $request->nama;
        $siswa->alamat  =   $request->alamat;
        $siswa->save();

        return "Data berhasil di tambahkan";
    }
}
