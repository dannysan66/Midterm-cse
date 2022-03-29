<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\NotesController;
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
Route::get('/db-migrate', function () {
    Artisan::call('migrate');
    echo Artisan::output();
});

Route::get('/db-test', function () {
    try {
         echo \DB::connection()->getDatabaseName();
    } catch (\Exception $e) {
          echo 'None';
    }
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employees', function () {
    return view('employees');
});

Route::get('/hardware', function () {
    return view('hardware');
});

// Route::get('/notes', function () {
//     return view('notes');

    Route::get('/create-notes', [NotesController::class, 'create'])->name('notes.add');
    Route::get('/create-notes', [NotesController::class, 'update'])->name('save.notes');
    URL::forceScheme('https');
});
