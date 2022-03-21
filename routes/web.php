<?php

use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
    $locale = LaravelLocalization::getCurrentLocaleDirection();

    // if($locale == 'ar'){
    //     return view('welcome2');
    // }
    return view('welcome');
});
Route::get('/message', function () {
    return 'done';
});
Route::post('/message/create', [MessageController::class, 'create'])->middleware(['guest'])->name('create.user.message');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
