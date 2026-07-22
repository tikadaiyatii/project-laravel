<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

// ================= UTS =================

Route::get('/uts', function () {
    return view('uts.index');
});

Route::post('/proses', function (Request $request) {
    return view('uts.proses', [
        'nama' => $request->nama,
        'tempat_lahir' => $request->tempat_lahir,
        'tanggal_lahir' => $request->tanggal_lahir,
        'jk' => $request->jk,
        'alamat' => $request->alamat,
        'sekolah' => $request->sekolah,
        'mtk' => $request->mtk,
        'bing' => $request->bing,
        'bindo' => $request->bindo,
        'jur1' => $request->jur1,
        'jur2' => $request->jur2,
        'alasan' => $request->alasan
    ]);
});

// ================= UAS =================

// Tampil Data
Route::get('/uas', function () {

    $data = DB::table('pendaftaran')->get();

    return view('uas.index', compact('data'));

});

// Form Tambah
Route::get('/create', function () {

    return view('uas.create');

});

// Simpan Data
Route::post('/simpan', function (Request $request) {

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
        'alasan' => $request->alasan
    ]);

    return redirect('/uas');

});

// Form Edit
Route::get('/edit/{id}', function ($id) {

    $data = DB::table('pendaftaran')
        ->where('id', $id)
        ->first();

    return view('uas.edit', compact('data'));

});

// Update Data
Route::post('/update/{id}', function (Request $request, $id) {

    DB::table('pendaftaran')
        ->where('id', $id)
        ->update([
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
            'alasan' => $request->alasan
        ]);

    return redirect('/uas');

});

// Hapus Data
Route::get('/hapus/{id}', function ($id) {

    DB::table('pendaftaran')
        ->where('id', $id)
        ->delete();

    return redirect('/uas');

});