<?php
use App\Http\Controllers\UserController;
use App\Mail\SampleMail;
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
   // return view('welcome');
   return new SampleMail();
});

Route::get('/email', [App\Http\Controllers\UserController::class, 'create']);
Route::post('/email', [App\Http\Controllers\UserController::class, 'sendEmail'])->name('send.email');
route::get('/contact-us', [UserController::class, 'contact'])->name('contact');

route::get('/',[UserController::class,'index'])->name('index');
route::get('/whyus',[UserController::class,'whyus'])->name('whyus');
route::get('/portfolio',[UserController::class,'portfolio'])->name('portfolio');
route::get('/services',[UserController::class,'services'])->name('services');

route::get('/2d-animation',[UserController::class,'animation2d'])->name('animation2d');
route::get('/animation3d',[UserController::class,'animation3d'])->name('animation3d');
route::get('/illustration',[UserController::class,'illustration'])->name('illustration');
route::get('/logo-animation',[UserController::class,'logo'])->name('logo');

route::get('/screencast',[UserController::class,'screencast'])->name('screencast');
route::get('/typography',[UserController::class,'typography'])->name('typography');
route::get('/whiteboard',[UserController::class,'whiteboard'])->name('whiteboard');

route::get('/explainer',[UserController::class,'explainer'])->name('explainer');
route::get('/explainer_videos',[UserController::class,'explainer_videos'])->name('explainer-videos');

route::get('/commercial',[UserController::class,'commercial'])->name('commercial');
route::get('/webdevelopment',[UserController::class,'webdevelopment'])->name('webdevelopment');
route::get('/graphic',[UserController::class,'graphic'])->name('graphic');
route::get('/appdevelopment',[UserController::class,'appdevelopment'])->name('appdevelopment');
route::get('/brand',[UserController::class,'brand'])->name('brand');
route::get('/uiux',[UserController::class,'uiux'])->name('uiux');
route::get('/software',[UserController::class,'software'])->name('software');
route::get('/social',[UserController::class,'social'])->name('social');
route::get('/videoediting',[UserController::class,'videoediting'])->name('videoediting');

route::get('/privacy',[UserController::class,'policy'])->name('policy');
route::get('/terms&conditions',[UserController::class,'terms'])->name('terms');
route::get('/term',[UserController::class,'term'])->name('term');
route::get('/home',[UserController::class,'home'])->name('home');
route::get('/home2',[UserController::class,'home2'])->name('home2');
route::get('/contact2',[UserController::class,'home2'])->name('contact2');
