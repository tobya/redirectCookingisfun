<?php

use App\Http\Controllers\RedirectController;
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
    return RedirectController::redirect('/');
});

Route::get('/error500', function (){})

Route::get('/ballymaloe-cookery-school/{guestchef}', [\App\Http\Controllers\BallymaloeCookerySchoolRedirect::class, 'redirect']);

Route::get('/ballymaloe-cookery-school/suppliers/{suppliername}', [\App\Http\Controllers\SupplierRedirectController::class, 'redirect']);
Route::get('/what-our-students-say/{whattheysay}',[\App\Http\Controllers\CourseRedirectController::class, 'whattheysay']);
Route::get('/cookery-courses/course-list/month/{month}',[\App\Http\Controllers\CourseRedirectController::class, 'byMonth']);
Route::get('/cookery-courses/course-list/search/{search}',[\App\Http\Controllers\CourseRedirectController::class, 'search']);
Route::get('/cookery-courses/week-list/all/{date}',[\App\Http\Controllers\CourseRedirectController::class, 'weeklistall']);
Route::get('/cookery-courses/course-list/duration/{duration}',[\App\Http\Controllers\CourseRedirectController::class, 'byDuration']);
Route::get('/cookery-courses/course-list',[\App\Http\Controllers\CourseRedirectController::class, 'courselist']);

Route::get('/cookery-courses/course-details/{courseid}/{?title}',[\App\Http\Controllers\CourseRedirectController::class, 'course']);

Route::get('/cookery-school-alumni/{pastpupil}',[\App\Http\Controllers\BallymaloeCookerySchoolRedirect::class, 'alumni']);
Route::get('/gallery/{gallery}',[\App\Http\Controllers\BallymaloeCookerySchoolRedirect::class, 'home']);
Route::get('/organic-farm/{section}',[\App\Http\Controllers\BallymaloeCookerySchoolRedirect::class, 'organicfarm']);


Route::get('/recipes.php',[\App\Http\Controllers\RecipeRedirectController::class, 'search']);
Route::get('/recipes/{id}/{name}',[\App\Http\Controllers\RecipeRedirectController::class, 'home']);


Route::get('/vouchers',[\App\Http\Controllers\VoucherRedirect::class,'home']);
Route::get('/vouchers/{package}',[\App\Http\Controllers\VoucherRedirect::class,'home']);

Route::get('/testroutes', [\App\Http\Controllers\TestListController::class, 'index']);

Route::any('/{any}',[\App\Http\Controllers\GeneralRedirect::class, 'general']  )->where('any', '.*');


