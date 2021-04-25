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

//login page
Route::get('/', 'auth\OtentikasiController@index')->name('login');
Route::post('/login', 'auth\OtentikasiController@login')->name('login');

//companies page
Route::get('companies', 'CompaniesController@index')->name('companies.data');
Route::get('companies/tambahdata', 'CompaniesController@tambahdata');
Route::post('companies/simpan', 'CompaniesController@simpan')->name('companies.simpan');
Route::delete('companies/delete/{id}', 'CompaniesController@delete')->name('companies.delete');

//sites page
Route::get('sites', 'SitesController@index')->name('sites.data');
Route::get('sites/tambahdatasites', 'SitesController@tambahdata');
Route::post('sites/simpan', 'SitesController@simpan')->name('sites.simpan');
Route::delete('sites/delete/{id}', 'SitesController@delete')->name('sites.delete');






// Route::get('/welcome', function () {
//     return view('welcome');
// });



/*Route::get('/tes', function () {
    return view('main');
});
Route::get('/', function () {
    return view('login');
});
*/

