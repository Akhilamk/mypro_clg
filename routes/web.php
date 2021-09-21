<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mycollege;

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
Route::view('mycollege','college');
Route::view('college','copyclg');

//project Routes//
Route::view('/', 'brilliance');
Route::view('design','headfoot');
Route::view('staffregister','staffregister');
Route::view('adminstaffprofile','adstafprofile');
Route::view('admincoursedetails','adcourse');
Route::view('registerbutton','registerbutton');
Route::view('events','event');
Route::view('course','courses');
Route::view('gallery','gallery');
Route::view('faqulties','faqulty');
Route::view('recruit','recruit');
Route::view('terms','terms&con');
Route::view('staffdash','staffdashboard');
Route::view('staffdashprofile','staffdashprofile');
Route::view('sign','signin');
Route::view('stud','studreg');
Route::view('statd','staffatendance');
Route::view('news','adminnews');
Route::view('adh','adminhome');
Route::view('adminstud','adminstud');