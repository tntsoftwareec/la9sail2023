<?php

use Illuminate\Support\Facades\Route;
use App\Helpers\TntHelper;
use Illuminate\Support\Facades\Log;
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
  //return view('welcome');
  $from = '.env';
//   $md = file_get_contents($from);
// 		return $md;
$path = app_path();
return $path;
   
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
