<?php

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
// Coding Untuk Route
// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/about', function () {
//     $nama = 'Selamat Datang di Halaman About';
//     return view('about', ['nama' => $nama]);
// });

// Akhir

// use Illuminate\Support\Facades\Route;

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');


// Students
// Route::get('/students', 'StudentsController@index');
// Route::get('/students/create', 'StudentsController@create');
// Route::get('/students/{student}', 'StudentsController@show');
// Route::post('/students', 'StudentsController@store');
// Route::delete('/students/{student}', 'StudentsController@destroy');
// Route::get('/students/{student}/edit', 'StudentsController@edit');
// Route::patch('/students/{student}', 'StudentsController@update');


Route::resource('students', 'StudentsController');


Route::resource('registrasi', 'RegistrasiController');
// Route::get('/registrasi/{daftar}', 'RegistrasiController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
