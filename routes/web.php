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
// ЗАПРОСЫ ТИПА GET
Route::get('/', 'App\Http\Controllers\MainController@ShowMainStr')->name('main_user_str');
Route::get('/register', 'App\Http\Controllers\AuthController@Show_register_form')->name('register');
Route::get('/auth', 'App\Http\Controllers\AuthController@Show_auth_form')->name('auth');
Route::get('/search_vacancies/', 'App\Http\Controllers\MainController@Search')->name('search_vacancies');
Route::get('/test', 'App\Http\Controllers\MainController@Test')->name('test');
Route::get('/create_vacancies_process', 'App\Http\Controllers\MainController@CreateVacanciesProcess')->name('create_vacancies_process');
Route::get('/create_portfolio', 'App\Http\Controllers\PortfolioController@ShowCreatePortfolioForm')->name('create_portfolio');
Route::get('/profile/{login}', 'App\Http\Controllers\MainController@ShowProfileStr')->name('profile');
Route::get('/message', 'App\Http\Controllers\MainController@Chat')->name('message');
Route::get('/create_messages', 'App\Http\Controllers\MainController@CreateMessage')->name('create_messages');


//  ЗАПРОСЫ ТИПА POST
Route::post('/auth_process', 'App\Http\Controllers\AuthController@Auth_Process')->name('auth_process');
Route::post('/formProcessor', function () {
    return response('', 200);
});
Route::post('/create_vacancies_process', 'App\Http\Controllers\MainController@CreateVacanciesProcess')->name('create_vacancies_process');
Route::post('/upload_files', 'App\Http\Controllers\MainController@UploadFiles')->name('upload_files');
Route::post('/search_vacancies_process', 'App\Http\Controllers\MainController@Process')->name('search_vacancies_process');
