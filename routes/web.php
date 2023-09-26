<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DanceController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\CourseController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderShipped;

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

// Route::get('/', function () {
//     return view('auth.login');
// });


//         Route::get('/sendmail', function(){
//             // Mail::to('mohand800001@gmail.com')->send(new OrderShipped);
//             Mail::to('muhammedreda6@gmail.com')->send(new OrderShipped);

//             return response('done');
//         })->middleware('auth');





// Route::get('/dashboard', function () {
//     return redirect('/user');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::controller(DanceController::class)->group(function(){
    Route::get('/','index')->name('/');
    Route::get('/class','class')->name('class');
    Route::get('/training','train')->name('training');
    Route::get('/show','show')->name('/show');
    Route::get('/contact','contact')->name('contact');
    Route::post('/contact','addcontact')->name('contact');
    Route::get('/short','short')->name('short');
    Route::get('/testmonail','testmonail');
});

Route::controller(JoinController::class)->group(function(){
    Route::get('/join','create');
    Route::post('/join','store');
    Route::get('/users','index')->middleware('auth');
});

Route::controller(CourseController::class)->group(function(){
    Route::middleware('auth')->group(function(){
    Route::get('/courses','index');
    Route::get('/addcourse','create');
    Route::post('/addcourse','store');
    });
});


require __DIR__.'/auth.php';
