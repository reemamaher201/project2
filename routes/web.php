<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::controller(StudentController::class)->name('students.')->prefix('students')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/add', 'add')->name('add');
    Route::post('/', 'school')->name('school');
});


// Just an example
// Route::controller(ModelController::class)->name('model.')->prefix('model')->group(function () {
//     Route::get('/', 'index')->name('index');
//     Route::post('/store', 'store')->name('store');
//     Route::post('/update', 'update')->name('update');
//     Route::delete('/{id}', 'destroy')->name('delete');
//     Route::get('/getData', 'getData')->name('getData');
//     Route::put('/activate/{uuid}', 'activate')->name('activate');
// });
