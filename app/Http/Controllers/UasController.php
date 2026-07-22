<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UasController extends Controller
{
    public function index()
    {
        $data = DB::table('pendaftaran')->get();

        return view('uas.index', compact('data'));
    }

    // TARUH DI SINI ↓↓↓

    public function create()
    {
        return view('uas.create');
    }

    public function simpan(Request $request)
    {
        DB::table('pendaftaran')->insert([
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'sekolah' => $request->sekolah,
            'mtk' => $request->mtk,
            'bing' => $request->bing,
            'bindo' => $request->bindo,
            'jurusan1' => $request->jur1,
            'jurusan2' => $request->jur2,
            'alasan' => $request->alasan,
        ]);

        return redirect('/uas');
    }

    public function edit($id)
    {
        $data = DB::table('pendaftaran')->where('id', $id)->first();

        return view('uas.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        DB::table('pendaftaran')
            ->where('id', $id)
            ->update([
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'alamat' => $request->alamat,
            ]);

        return redirect('/uas');
    }

    public function hapus($id)
    {
        DB::table('pendaftaran')->where('id', $id)->delete();

        return redirect('/uas');
    }
}