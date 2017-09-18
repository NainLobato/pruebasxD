<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('pdf', function(){
	$users = App\User::all();
	$pdf = PDF::loadView('pdf.pdf', ['users' => $users]);
	return $pdf->download('archivo.pdf');
});

Route::get('pdf1', 'pdfController@invoice');



Route::get('qrcode', function () {
    return view('qrcodes.qrcodes');
});