<?php

use App\Http\Controllers\Admin\DocumentController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\HomepageController;
use App\Http\Controllers\Dashboard\TrackingpageController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\TrackVisitor;


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
Route::get('/',  [HomepageController::class, 'index'])->name('dashboard.homepage');
//Route::get('/',  [HomepageController::class, 'index'])->name('dashboard_en.homepage');
Route::get('/tracking', [TrackingpageController::class, 'index'])->name('dashboard.tracking');
Route::post('/tracking/search', [TrackingpageController::class, 'search']);
// AUTH
Route::get('/register', [AuthController::class, 'pageRegister'])->middleware('guest');
Route::post('register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::get('/login', [AuthController::class, 'pageLogin'])->name('page-login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('/documents', DocumentController::class);
    Route::get('/documents/change-status/{id}', [DocumentController::class, 'changeStatus'])->name('documents.change-status');
    Route::get('/settings', [SettingController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingController::class, 'update'])->name('settings.update');
});
Route::get('/dashboard/homepage', function () {
    $visitors = Visitor::all();
    return view('dashboard.homepage', compact('visitors'));
});
//Route::get('/', function () {
//    return view('welcome');
//})->middleware(TrackVisitor::class);
//Route::get('/admin/visitors', function () {
//    $visitors = \App\Models\Visitor::all();
//    return view('admin.visitors', compact('visitors'));
//});
//
