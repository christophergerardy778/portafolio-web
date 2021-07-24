<?php

use App\Project;
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

Route::get('/', function () {
    $projects = Project::orderBy('created_at', 'desc')->limit(3)->get();
    return view('welcome', compact("projects"));
});

Route::get('/portafolio', function () {
    return view('portfolio');
});
