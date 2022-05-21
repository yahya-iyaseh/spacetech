<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Project;
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

Route::get('/', [HomeController::class, 'home'])->name('home');
// Route::get('/message', function () {
//     return 'done';
// });

// Route::get('/test', function () {
//     $project = Project::find(3);
//     // $images = json_decode($project->images);
//     dd($project->date);
//     // return view('test', [
//     //     'images' => $images,
//     // ]);
// });
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::post('/message/create', [MessageController::class, 'create'])->name('create.user.message');
Route::get('/project/{id?}', [MessageController::class, 'project'])->name('show.project');

// Route::get('/', function(){
//     return view('welcome');
// })->name('voyager.messages.index');

// Route::get('/3', function(){
//     return view('welcome');
// })->name('voyager.projects.index');

// Route::get('/4', function(){
//     return view('welcome');
// })->name('voyager.employees.index');
// Route::get('/', function(){
//     return view('welcome');
// })->name('voyager.messages.index');
