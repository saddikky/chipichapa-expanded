<?php

use App\Http\Controllers\ApptController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('landing');

Route::get('/about-us', function (){
    return view('about');
})->name('about');

Route::controller(AuthController::class)->group(function(){
    Route::get('/registration', 'showRegistration')->name('registration');
    Route::post('/registration/submit', 'submitRegistration')->name('registration.submit');
    
    Route::get('/login', 'showLogin')->name('login');
    Route::post('/login/submit', 'submitLogin')->name('login.submit');
});

Route::middleware('auth')->group(function () {

    Route::prefix('admin')->middleware(['isAdmin'])->group(function(){
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
        Route::get('/employee', [EmployeeController::class, 'show'])->name('employee.show');
        Route::get('/employee/add', [EmployeeController::class, 'add'])->name('employee.add');
        Route::post('/employee/submit', [EmployeeController::class, 'submit'])->name('employee.submit');
        Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
        Route::post('/employee/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');
        Route::post('/employee/delete/{id}', [EmployeeController::class, 'delete'])->name('employee.delete');
        Route::get('/employee/list', [EmployeeController::class, 'list'])->name('employee.list');
        Route::get('/appointment/admin-list', [ApptController::class, 'admListAppt'])->name('admin.appt.list');
        Route::post('/appointment/{id}/update-status/{status}', [ApptController::class, 'updateStatus'])->name('admin.appt.update-status');
        Route::delete('/appointment/{id}', [ApptController::class, 'destroy'])->name('admin.appt.delete');
    });
    Route::get('/appointment/list', [ApptController::class, 'listAppt'])->name('appt.list');
    Route::get('/appointment/create', [ApptController::class, 'createAppt'])->name('appt.create');
    Route::post('/appointment/store', [ApptController::class, 'storeAppt'])->name('appt.store');
    Route::get('/services', function () {
        return view('services');
    })->name('services');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});