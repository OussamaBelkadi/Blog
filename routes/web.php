<?php

use App\Http\Controllers;
use App\Models\Post;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::resource('/home', PostController::class)->only('index', 'show');
// Route::get('/',[PostController::class, 'index']);
// Route::get('/home/{{$id}}',[PostController::class, 'show']);
