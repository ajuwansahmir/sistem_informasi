<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;





/*
|--------------------------------------------------------------------------
| HALAMAN PUBLIC / MASYARAKAT
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    $dbd = DB::table('data_kasus')
        ->where('id_penyakit',1)
        ->sum('jumlah_kasus');

    $malaria = DB::table('data_kasus')
        ->where('id_penyakit',2)
        ->sum('jumlah_kasus');

    $kecamatan = DB::table('kecamatan')->count();

    return view('public', compact(
        'dbd',
        'malaria',
        'kecamatan'
    ));

});





/*
|--------------------------------------------------------------------------
| LOGIN ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/admin', function () {

    return view('login');

});





/*
|--------------------------------------------------------------------------
| PROSES LOGIN
|--------------------------------------------------------------------------
*/

Route::post('/login', function (Request $request) {

    $admin = DB::table('admin')

    ->where('username', $request->username)

    ->where('password', $request->password)

    ->first();



    if($admin){

        session([
            'admin' => $admin->username
        ]);

        return redirect('/dashboard');

    }else{

        return back()->with('error',
        'Username atau Password salah');

    }

});





/*
|--------------------------------------------------------------------------
| DASHBOARD ADMIN
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {

    if(!session()->has('admin')){

        return redirect('/admin');

    }

    $dbd = DB::table('data_kasus')
        ->where('id_penyakit',1)
        ->sum('jumlah_kasus');

    $malaria = DB::table('data_kasus')
        ->where('id_penyakit',2)
        ->sum('jumlah_kasus');

    $kecamatan = DB::table('kecamatan')->count();

    return view('dashboard', compact(
        'dbd',
        'malaria',
        'kecamatan'
    ));

});





/*
|--------------------------------------------------------------------------
| DATA KASUS
|--------------------------------------------------------------------------
*/

Route::get('/data-kasus', function () {

    if(!session()->has('admin')){
        return redirect('/admin');
    }

    $kasus = DB::table('kecamatan')

    ->leftJoin('data_kasus as dbd', function($join){
        $join->on('kecamatan.id_kecamatan','=','dbd.id_kecamatan')
             ->where('dbd.id_penyakit',1);
    })

    ->leftJoin('data_kasus as malaria', function($join){
        $join->on('kecamatan.id_kecamatan','=','malaria.id_kecamatan')
             ->where('malaria.id_penyakit',2);
    })

    ->select(
        'kecamatan.id_kecamatan',
        'kecamatan.nama_kecamatan',
        'dbd.jumlah_kasus as dbd',
        'malaria.jumlah_kasus as malaria'
    )

    ->get();

    return view('data-kasus', compact('kasus'));

});





/*
|--------------------------------------------------------------------------
| TAMBAH / UPDATE DATA KASUS
|--------------------------------------------------------------------------
*/

Route::post('/tambah-kasus', function(Request $request){

    // DBD

    $cekDbD = DB::table('data_kasus')

    ->where('id_kecamatan', $request->id_kecamatan)

    ->where('id_penyakit', 1)

    ->first();



    if($cekDbD){

        DB::table('data_kasus')

        ->where('id_kecamatan', $request->id_kecamatan)

        ->where('id_penyakit', 1)

        ->update([

            'jumlah_kasus' => $request->dbd

        ]);

    }else{

        DB::table('data_kasus')->insert([

            'id_kecamatan' => $request->id_kecamatan,
            'id_penyakit' => 1,
            'jumlah_kasus' => $request->dbd

        ]);

    }



    // MALARIA

    $cekMalaria = DB::table('data_kasus')

    ->where('id_kecamatan', $request->id_kecamatan)

    ->where('id_penyakit', 2)

    ->first();



    if($cekMalaria){

        DB::table('data_kasus')

        ->where('id_kecamatan', $request->id_kecamatan)

        ->where('id_penyakit', 2)

        ->update([

            'jumlah_kasus' => $request->malaria

        ]);

    }else{

        DB::table('data_kasus')->insert([

            'id_kecamatan' => $request->id_kecamatan,
            'id_penyakit' => 2,
            'jumlah_kasus' => $request->malaria

        ]);

    }

    return redirect('/data-kasus');

});





/*
|--------------------------------------------------------------------------
| EDIT DATA KASUS
|--------------------------------------------------------------------------
*/

Route::post('/edit-kasus/{id}', function(Request $request, $id){

    // UPDATE DBD

    $cekDbD = DB::table('data_kasus')

    ->where('id_kecamatan', $id)

    ->where('id_penyakit', 1)

    ->first();



    if($cekDbD){

        DB::table('data_kasus')

        ->where('id_kecamatan', $id)

        ->where('id_penyakit', 1)

        ->update([

            'jumlah_kasus' => $request->dbd

        ]);

    }else{

        DB::table('data_kasus')->insert([

            'id_kecamatan' => $id,
            'id_penyakit' => 1,
            'jumlah_kasus' => $request->dbd

        ]);

    }



    // UPDATE MALARIA

    $cekMalaria = DB::table('data_kasus')

    ->where('id_kecamatan', $id)

    ->where('id_penyakit', 2)

    ->first();



    if($cekMalaria){

        DB::table('data_kasus')

        ->where('id_kecamatan', $id)

        ->where('id_penyakit', 2)

        ->update([

            'jumlah_kasus' => $request->malaria

        ]);

    }else{

        DB::table('data_kasus')->insert([

            'id_kecamatan' => $id,
            'id_penyakit' => 2,
            'jumlah_kasus' => $request->malaria

        ]);

    }

    return redirect('/data-kasus');

});




/*
|--------------------------------------------------------------------------
| HAPUS DATA KASUS
|--------------------------------------------------------------------------
*/

Route::get('/hapus-kasus/{id}', function($id){

    DB::table('data_kasus')

    ->where('id_kecamatan', $id)

    ->delete();

    return redirect('/data-kasus');

});





/*
|--------------------------------------------------------------------------
| LOGOUT
|--------------------------------------------------------------------------
*/

Route::get('/logout', function () {

    session()->forget('admin');

    return redirect('/admin');

});





/*
|--------------------------------------------------------------------------
| DATA PENYAKIT
|--------------------------------------------------------------------------
*/

Route::get('/data-penyakit', function () {

    if(!session()->has('admin')){
        return redirect('/admin');
    }

    $penyakit = DB::table('penyakit')->get();

    return view('data-penyakit', compact('penyakit'));

});





/*
|--------------------------------------------------------------------------
| DATA KECAMATAN
|--------------------------------------------------------------------------
*/

Route::get('/data-kecamatan', function () {

    if(!session()->has('admin')){
        return redirect('/admin');
    }

    $kecamatan = DB::table('kecamatan')->get();

    return view('data-kecamatan', compact('kecamatan'));

});





/*
|--------------------------------------------------------------------------
| PETA PERSEBARAN
|--------------------------------------------------------------------------
*/

Route::get('/peta-persebaran', function () {

    if(!session()->has('admin')){
        return redirect('/admin');
    }

    return view('peta-persebaran');

});





/*
|--------------------------------------------------------------------------
| PUBLIC
|--------------------------------------------------------------------------
*/

Route::get('/persebaran', function () {

    return view('persebaran');

});

Route::get('/informasi', function () {

    return view('informasi');

});