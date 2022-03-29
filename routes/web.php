<?php

use Illuminate\Support\Facades\Route;

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

    URL::forceScheme('https');

Route::get('/db-migrate', function () {
    Artisan::call('migrate');
    echo Artisan::output();
});

Route::get('/db-test', function() {
    try {
        \DB::connection()->getPDO();
        $db_name = \DB::connection()->getDatabaseName();
        echo 'Database Connected: '.$db_name;
    } catch (\Exception $e) {
        echo 'None';
    }
});

Route::get('/db-migrate', function() {
    Artisan::call('migrate');
    echo Artisan::output();
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

Route::get('/notes', function () {
    return view('notes');
    
});
