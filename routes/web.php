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

Route::get('/', function () {
    return view('welcome');
});

//Route::redirect('/' ,'http://ballymaloecookeryschool.ie');
Route::redirect('/5-week-summer-cookery-course' ,'http://ballymaloecookeryschool.ie');
Route::get('/ballymaloe-cookery-school/{guestchef}', [\App\Http\Controllers\BallymaloeCookerySchoolRedirect::class, 'redirect']);
Route::get('/ballymaloe-cookery-school/suppliers/{suppliername}', [\App\Http\Controllers\SupplierRedirectController::class, 'redirect']);
Route::get('/cookery-courses/course-list/month/{month}',[\App\Http\Controllers\CourseRedirectController::class, 'byMonth']);
Route::get('/cookery-courses/course-list/search/{search}',[\App\Http\Controllers\CourseRedirectController::class, 'search']);
