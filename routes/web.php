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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Doctors
Route::get('/doctors', 'DoctorController@index')
    ->name('doctors.index');
Route::get('/doctors/{doctor}', 'DoctorController@show')
    ->where('doctor', '[0-9]+')
    ->name('doctors.show');
Route::get('/doctors/nuevo', 'DoctorController@create')->name('doctors.create');
Route::post('/doctors', 'DoctorController@store');
Route::get('/doctors/{doctor}/editar', 'DoctorController@edit')->name('doctors.edit');
Route::put('/doctors/{doctor}', 'DoctorController@update');
Route::delete('/doctors/{doctor}', 'DoctorController@destroy')->name('doctors.destroy');

//Pacients
Route::get('/pacients', 'PacientController@index')
    ->name('pacients.index');
Route::get('/pacients/{pacient}', 'PacientController@show')
    ->where('pacient', '[0-9]+')
    ->name('pacients.show');
Route::get('/pacients/nuevo', 'PacientController@create')->name('pacients.create');
Route::post('/pacients', 'PacientController@store');
Route::get('/pacients/{pacient}/editar', 'PacientController@edit')->name('pacients.edit');
Route::put('/pacients/{pacient}', 'PacientController@update');
Route::delete('/pacients/{pacient}', 'PacientController@destroy')->name('pacients.destroy');

//Specialties
Route::get('/specialties', 'SpecialtyController@index')
    ->name('specialties.index');
Route::get('/specialties/{specialty}', 'SpecialtyController@show')
    ->where('specialty', '[0-9]+')
    ->name('specialties.show');
Route::get('/specialties/nuevo', 'SpecialtyController@create')->name('specialties.create');
Route::post('/specialties', 'SpecialtyController@store');
Route::get('/specialties/{specialty}/editar', 'SpecialtyController@edit')->name('specialties.edit');
Route::put('/specialties/{specialty}', 'SpecialtyController@update');
Route::delete('/specialties/{specialty}', 'SpecialtyController@destroy')->name('specialties.destroy');

//logout
Route::get('/logout', function(){
    Session::flush();
    Auth::logout();
    return Redirect::to("/")
      ->with('message', array('type' => 'success', 'text' => 'Cerro sesión correctamente'));
});
