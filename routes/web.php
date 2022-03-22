<?php

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

Route::get('/', function () {
    $locale = LaravelLocalization::getCurrentLocaleDirection();

    // if($locale == 'ar'){
    //     return view('welcome2');
    // }
    $projects = Project::latest()->get();
    // dd($projects);
    return view('welcome', [
        'projects' => $projects,
    ]);
});
Route::get('/message', function () {
    return 'done';
});
Route::post('/message/create', [MessageController::class, 'create'])->middleware(['guest'])->name('create.user.message');
Route::get('/project/{id?}', [MessageController::class, 'project'])->name('show.project');
Route::get('/test', function () {
    $project = Project::find(3);
    // $images = json_decode($project->images);
    dd($project->date);
    // return view('test', [
    //     'images' => $images,
    // ]);
});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
