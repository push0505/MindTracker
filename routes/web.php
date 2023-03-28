<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MindTracker;
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


Route::get('/home',[MindTracker::class,'myHome']);
Route::get('/',[MindTracker::class,'myHome']);
Route::get('/about',[MindTracker::class,'about']);

Route::get('/blog',[MindTracker::class,'blog']);
Route::get('/contact',[MindTracker::class,'contact']);
Route::get('/services',[MindTracker::class,'services']);

Route::view('/faq', 'frontend/faq');

Route::view('/personality-disorders', 'frontend/personality');

Route::view('/troubling-emotions', 'frontend/emotions');

Route::view('/individual-counselling', 'frontend/individual');

Route::view('/child-counselling', 'frontend/child');

Route::view('/group-counselling', 'frontend/group');

Route::view('/couple-counselling', 'frontend/couple');

Route::view('/deskapp', 'Adminlayouts/index');










