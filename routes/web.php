<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingController;
use App\Exports\InscritsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\DashboardController;
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



Route::middleware(['middleware'=>'auth'])->group(function(){
  Route::get('inscrit-conference',[SettingController::class, 'index'])->name('inscrit.conference');
  Route::post('inscrit-detail',[SettingController::class, 'getInscritId'])->name('get.inscrit.detail');
  Route::post('lieu_touristik-detail',[SettingController::class, 'getLieuTouristik'])->name('get.lieu_touristik.detail');
  Route::post('send-email-pdf', [SettingController::class, 'envoiMail'])->name('envoi.mail');
  Route::get('/getInscritList',[SettingController::class, 'getInscritList'])->name('get.inscrit.list');
  Route::get('/inscrits/export', [ExportController::class, 'exportInscrits'])->name('inscrits.export');
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

});


Route::get('/Inscription-conference-oide', function () {
    return view('index');
})->name('inscription');

Route::get('/', function () {
    return view('countdown');
})->name('countdown');


Route::post('/ajouter-inscrit',[SettingController::class, 'ajoutInscrit'])->name('ajouter.inscrit');

Route::get('/inscrit/{id}/{nom}', [SettingController::class, 'show'])->name('inscrit.show');


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
