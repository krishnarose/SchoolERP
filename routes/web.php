<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\schoolstaff\StaffController;
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
    return view('main_home');
});
// Route::get('/main_home', [HomeController::class, 'main_home'])->name('main_home');


Auth::routes();

Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth', 'user-type:user'])->group(function () {
    // Route::get('/user-dashboard', [UserController::class, 'user_dashboard'])->name('user.dashboard');
    Route::get('/home', [UserController::class, 'index'])->name('home');
    Route::get('/home/registerr', [UserController::class, 'registerr'])->name('user.register');
    Route::post('/home/saveregisterr', [UserController::class, 'saveregisterr'])->name('user.saveregister');


});
Route::middleware(['auth', 'user-type:admin'])->group(function () {
    Route::get('/admin-dashboard', [AdminController::class, 'admin_dashboard'])->name('admin.dashboard');
    Route::get('/admin-dashboard/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/admin-dashboard/table', [AdminController::class, 'table'])->name('admin.table');
    Route::get('/admin-dashboard/delete/{id}', [AdminController::class, 'delete'])->name('user.delete');
    Route::get('/admin-dashboard/edit/{id}', [AdminController::class, 'edit'])->name('user.edit');
    Route::post('/admin-dashboard/updateUser', [AdminController::class, 'updateUser'])->name('user.updateUser');





});
Route::middleware(['auth', 'user-type:schoolstaff'])->group(function () {
    Route::get('/staff-dashboard', [StaffController::class, 'staff_dashboard'])->name('staff.dashboard');
});

Route::get('email/verify',function(){
    return view('auth.verify');

})->middleware('auth')->name('verification.verify');


