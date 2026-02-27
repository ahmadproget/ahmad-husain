<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('index');
});

Route::get('/project',[ProjectController::class, 'index'])->name('project.index');
Route::post('/contact-send', [ContactController::class, 'sendEmail'])->name('contact.send');
