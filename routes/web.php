<?php

use App\Http\Controllers\NhansuController;
use App\Http\Controllers\TeamController;
use App\Models\team;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
     
$team = team::with('nhansu')->get(); // Lấy tất cả các đội cùng với thông tin nhân sự của mỗi đội
return view('index', compact('team'));

});

Route::get('/trangnhansu', function () {
     
    $team = team::with('nhansu')->get(); // Lấy tất cả các đội cùng với thông tin nhân sự của mỗi đội
    return view('trangnhansu', compact('team'));
    
    });
Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/trangnhansu/{id}',[nhansuController::class, 'show'])->name('team.show');
Route::get('/team/{id}', [nhansuController::class, 'show'])->name('team.show');
Route::get('/products', [HomeController::class, 'product'])->name('products');
Route::get('/teams/{id}/edit', [TeamController::class, 'edit'])->name('teams.edit');
Route::get('/teams/{id}/destroy', [TeamController::class, 'destroy'])->name('teams.destroy');
Route::get('/teams',[TeamController::class, 'index'])->name('teams.index');
Route::resource('nhansu', nhansuController::class);