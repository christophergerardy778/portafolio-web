<?php

use App\Project;
use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
    $projects = Project::orderBy('created_at', 'desc')->get();
    return view('portfolio', compact('projects'));
});

Route::post('/contact', function (Request $request) {
    $name = $request->get('name');
    $fromEmail = $request->get('email');
    $message = $request->get('message');

    Mail::to("christophergerardy778@gmail.com")->send(new Contact($message, $fromEmail, $name));

    return response()->json([
        "ok" => true,
        "data" => "mensaje enviado"
    ]);
});
