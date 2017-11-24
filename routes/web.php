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


Route::get('/createWord', ['as'=>'createWord','uses'=>'WordTestController@createWordDocx']);		//Word desde cero
Route::get('/createWord2', ['as'=>'createWord2','uses'=>'WordTestController2@createWordDocx']);		//Word con ejemplo de plantilla
Route::get('/createWord3', ['as'=>'createWord3','uses'=>'WordTestController3@createWordDocx']);		//Word con plantilla de constancia de hechos

Route::get('/SweetAlert/{alertType?}', ['as'=>'SweetAlert','uses'=>'SweetAlertDemo@index']);


Route::get('/datetime', function () {
    return view('datetime');
});