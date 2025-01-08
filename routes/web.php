<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get("/", [HomeController::class , 'home'])->name('home');
Route::get("/about", [HomeController::class , 'about'])->name('about');
Route::get('/courses', [HomeController::class , 'course'])->name('courses');
Route::get('/course-details', [HomeController::class ,'courseDetails'])->name('course-details');
Route::get('/events',[HomeController::class, 'events'])->name('events');
Route::get('/students',[HomeController::class, 'students'])->name('students');
Route::get('/faculties', [HomeController::class ,'faculties'])->name('faculties');
Route::get('/activities', [HomeController::class ,'activities'])->name('activities');
Route::get('/contact', [HomeController::class ,'contact'])->name('contact');
Route::get('/gallery', [HomeController::class ,'gallery'])->name('gallery');
Route::get('/blog', [HomeController::class ,'blog'])->name('blog');
Route::get('/blog-details', [HomeController::class ,'blogDetails'])->name('blog-details');
Route::get('/students', [HomeController::class ,'student'])->name('students');
Route::get('/faculties', [HomeController::class ,'faculty'])->name('faculties');
Route::get('/alumini', [HomeController::class ,'alumini'])->name('alumini');
Route::get('/team-details', [HomeController::class ,'teamDetails'])->name('team-details');

Route::get('/login', [AuthController::class ,'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->name('user.authenticate')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('auth/google', [AuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google-callback', [AuthController::class, 'handleGoogleCallback'])->name('google.callback');
Route::get('auth/github', [AuthController::class, 'redirectToGitHub'])->name('github.login');
Route::get('auth/github-callback', [AuthController::class, 'handleGithubCallback'])->name('github.callback');

Route::get('/register', [AuthController::class ,'showRegister'])->name('register');