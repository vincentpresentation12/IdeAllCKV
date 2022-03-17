<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormationController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\FormationAnimateurController;
use App\Http\Controllers\DashboardAnimateurController;
use App\Http\Controllers\EventAnimateurController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
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


Route::middleware(['auth', 'admin'])->group(function (){
    Route::get('/home', function(){
        return redirect('/admin');
    })->name('dashboard');
});

Route::middleware(['auth', 'animateur'])->group(function (){
    Route::get('/home', function(){
        return redirect('/animateur');
    })->name('dashboard');
});

Auth::routes();

Route::middleware(['auth', 'admin'])->group(function (){
    Route::get('/admin', function(){
        return view('dashboardadmin');
    })->name('dashboard');
    Route::resource('/admin', DashboardAdminController::class);
});

Route::middleware(['auth', 'animateur'])->group(function (){
    Route::get('/animateur', function(){
        return view('dashboardanimateur');
    })->name('dashboard');
    Route::resource('/animateur', DashboardAnimateurController::class);
});

Route::middleware(['auth', 'admin'])->group(function (){
    Route::resource('/adminuser', UserController::class);
});

Route::middleware(['auth', 'admin'])->group(function (){
    Route::resource('/adminevent', EventController::class);
});

Route::middleware(['auth', 'admin'])->group(function (){
    Route::resource('/adminformation', FormationController::class);
});

Route::middleware(['auth', 'animateur'])->group(function (){
    Route::get('/animateurshow',function(){
        return view('animateurshow');
    })->name('profil');
});

Route::middleware(['auth', 'animateur'])->group(function (){
    Route::resource('/animateurevent', EventAnimateurController::class);
});

Route::middleware(['auth', 'animateur'])->group(function (){
    Route::resource('/animateurformation', FormationAnimateurController::class);
});
