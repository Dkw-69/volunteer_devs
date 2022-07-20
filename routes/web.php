<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\ContactController;
use \App\Http\Controllers\JobsController;
use \App\Http\Controllers\ProfileController;
use \App\Http\Controllers\AdminController;

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

/* REGULAR ROUTES */
// Display home page
Route::get('/', [HomeController::class, 'index']);

// Display about page
Route::get('/about', [HomeController::class, 'about']);

// Display contact page
Route::get('/contact', [ContactController::class, 'contact']);

// Send the mail
Route::post('/contact', [ContactController::class, 'sendEmail']);


/* PROFILES ROUTES */
// Display all profiles page
Route::get('/profiles', [ProfileController::class, 'index']);

// Display register page
Route::get('profiles/register', [ProfileController::class, 'register'])->middleware('guest');

// Create new profile
Route::post('/profiles', [ProfileController::class, 'store']);

// Log out the user
Route::post('/logout', [ProfileController::class, 'logout'])->middleware('auth');

// Display login page
Route::get('profiles/login', [ProfileController::class, 'login'])->name('login')->middleware('guest');

// Log in the user
Route::post('/profiles/authenticate', [ProfileController::class, 'authenticate']);

// Display dashboard
Route::get('/dashboard', [ProfileController::class, 'showProfile'])->middleware('auth');

// Display edit profile form
Route::get('/profiles/{profile}/edit', [ProfileController::class, 'edit'])->middleware('auth');

// Update profile
Route::put('/profiles/{profile}', [ProfileController::class, 'update'])->middleware('auth');

// Delete profile
Route::delete('/profiles/{profile}', [ProfileController::class, 'destroy'])->middleware('auth');

// Display single profile
Route::get('/profiles/{profile}', [ProfileController::class, 'show']);


/* JOBS ROUTES */
// Display jobs page
Route::get('/jobs', [JobsController::class, 'index']);

// Display create jobs form
Route::get('/jobs/create', [JobsController::class, 'create']);

// create a new job
Route::post('/jobs', [JobsController::class, 'store']);

// Display single job
Route::get('/jobs/{job}', [JobsController::class, 'show']);


/* ADMIN ROUTES */
// Display admin dashboard
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth');

// Display all profiles (admin)
Route::get('/admin/profiles', [AdminController::class, 'adminShowProfiles'])->middleware('admin');

// Delete profile (admin)
Route::delete('/admin/profiles/{profile}', [AdminController::class, 'adminDestroyProfile'])->middleware('admin');

// Display all jobs (admin)
Route::get('/admin/jobs', [AdminController::class, 'adminShowJobs'])->middleware('admin');

// Display job details (admin)
Route::get('/admin/jobs/{job}', [AdminController::class, 'adminSingleJob'])->middleware('admin');

// Display Edit job form (admin)
Route::get('/admin/jobs/{job}/edit', [AdminController::class, 'adminEditJob'])->middleware('admin');

// Update job (admin)
Route::put('/admin/jobs/{job}', [AdminController::class, 'adminUpdateJob'])->middleware('admin');

// Delete job (admin)
Route::delete('/admin/jobs/{job}', [AdminController::class, 'adminDestroyJob'])->middleware('admin');





