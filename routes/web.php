<?php
use App\Http\Controllers\web\ExamController;
use App\Http\Controllers\web\SkillController;
use App\Http\Controllers\web\CatController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\web\LangController;
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
    Route::get('/exam/questions/{i}',[ExamController::class,'Questions']);
    Route::get('/contact',[ContactController::class,'show']);
    Route::post('/contact',[ContactController::class,'send']);
    Route::get('lang/set/{lang}',[LangController::class,'changeLang']);
});

