<?php

use App\Http\Controllers\Backend\DefaultController;
use App\Http\Controllers\Backend\SettingsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('nedmin',[DefaultController::class, 'index'])->name('nedmin.Index');


Route::get('nedmin/settings', [SettingsController::class, 'index'])->name('settings.Index');
Route::post('nedmin/sortable', [SettingsController::class, 'sortable'])->name('settings.Sortable');
Route::get('nedmin/settings/delete/{id}',[SettingsController::class, 'destroy'])->name('settings.Destroy');

?>







