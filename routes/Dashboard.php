<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DoctorController;
use App\Http\Controllers\Dashboard\SectionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...
    

            Route::get('/', function () {
                return view('welcome');
            });

            Route::get('/dashboard', function () {
                return view('dashboard');
            })->middleware(['auth', 'verified'])->name('dashboard');

            Route::middleware('auth')->group(function () {
                Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
                Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
                Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
            });

            require __DIR__.'/auth.php';


            // Dashboard Admin
            Route::get('/dashboard/admin',function() {
                return view('Dashboard.Admin.dashboard');
            })->middleware('auth:admin')->name('dashboard.admin');


            // Dashboard User

            Route::get('/dashboard/user',function () {
                return view('Dashboard.User.dashboard');
            })->middleware('auth:web')->name('dashboard.user');


            Route::middleware('auth:admin')->group(function (){
                Route::resource('Sections',SectionController::class);
                Route::resource('Doctors',DoctorController::class);
            });


});