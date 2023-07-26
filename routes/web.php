<?php

use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\BlogController;


// // use App\Http\Controllers\StudentsController


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



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('/home');
Auth::routes();

Route::get('assignment', [App\Http\Controllers\AssignmentController::class, 'createAssignment'])->name('assignment');
Route::post('storeAssignment', [App\Http\Controllers\AssignmentController::class, 'storeAssignment'])->name('storeAssignment');
Route::get('main', [App\Http\Controllers\AssignmentController::class, 'main'])->name('students.main');
Route::get('pay', [App\Http\Controllers\PaymentController::class, 'pay'])->name('pay');
Route::post('make-payment', [App\Http\Controllers\PaymentController::class,'make_payment'])->name('make.payment');
Route::get('paystack/callback',[App\Http\Controllers\PaymentController::class,'callback'])->name('payment.callback');
Route::post('store',[App\Http\Controllers\SubmissionController::class, 'store'])->name('submission.store');
Route::get('submission',[App\Http\Controllers\SubmissionController::class,'create'])->name('submission');


Route::resource('students', StudentsController::class);
Route::resource('blog', BlogController::class);
// Route::get('/students/index', [App\Http\Controllers\StudentsController::class, 'index'])->name('students');
// Route::get('/students/create', [App\Http\Controllers\StudentsController::class, 'create'])->name('students.create');
// Route::get('/students/edit/{id}', [App\Http\Controllers\StudentsController::class, 'edit'])->name('students.edit');
Route::get('/students/delete/{id}', [App\Http\Controllers\StudentsController::class, 'destroy'])->name('students.delete');




// Route::resource('type', TypeController::class);

// Route::prefix('home')->as('home.')->controller('HomeController')->group(function(){
//     Route::get('/','index')->name('index');
//     Route::post('/store','store')->name('store');
// });

// Route::resource('home',[HomeController::class]);
// Route::get('phpinfo', fn () => phpinfo());
