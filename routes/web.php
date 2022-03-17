<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('student', StudentController::class);
Route::resource('course', CourseController::class);
Route::get('course/export/{course}', [CourseController::class, 'export']);
Route::get('students/export/', [StudentController::class, 'export']);
/* Route::get('/mtt/attendance/{id}', [
    'as' => 'mtt.attendance',
    'uses' => 'ExcelController@export'
]); */
/* Route::resource('course', CourseController::class)->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', [CourseController::class, 'index'])->name('course');
}); */
