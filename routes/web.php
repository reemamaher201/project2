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
    Route::get('/{student}/edit', 'edit')->name('edit');
    Route::put('/{student}/update', 'update')->name('update');
    Route::delete('/{student}/destroy', 'destroy')->name('destroy');

});



