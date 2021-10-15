<?php
use App\Http\Controllers\admin\HomeController as adminHomeController;
use App\Http\Controllers\admin\CatController as adminCatsController;
use App\Http\Controllers\web\ExamController;
use App\Http\Controllers\web\SkillController;
use App\Http\Controllers\web\CatController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\web\LangController;
use App\Http\Controllers\web\profileController;
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
Route::middleware(['lang'])->group(function () {
    Route::get('/', [HomeController::class,'index']);
    Route::get('/cat/{i}',[CatController::class,'show']);
    Route::get('/skill/{i}',[SkillController::class,'show']);
    Route::get('/exam/{i}',[ExamController::class,'show']);
    Route::get('/exam/questions/{i}',[ExamController::class,'Questions'])->middleware(['student','auth','verified']);
    Route::get('/contact',[ContactController::class,'show'])->middleware('verified');
    Route::get('lang/set/{lang}',[LangController::class,'changeLang']);
    Route::get('/profile',[profileController::class,'show'])->middleware(['student','auth','verified']);;

    Route::view('/MiddlewareOnlyStudent', 'auth/MiddlewareOnlyStudent');
});
Route::post('/contact',[ContactController::class,'send']);
Route::post('/exam/start/{i}',[ExamController::class,'start'])->middleware(['student','auth','verified']);
Route::post('/exam/submit/{i}',[ExamController::class,'submit'])->middleware(['student','auth','verified']);

Route::prefix('dashboard')->middleware(['auth','verified','CanEnterDashboard'])->group(function(){
  Route::get('/',[adminHomeController::class,'index']);
  Route::get('/cats',[adminCatsController::class,'index']);
  Route::post('/store',[adminCatsController::class,'store']);
  Route::get('/delete/{cat}',[adminCatsController::class,'delete']);
  Route::get('/active/{cat}',[adminCatsController::class,'active']);
  Route::post('/update',[adminCatsController::class,'update']);
});
