<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
        return view('profile');  
});
   
Route::get('/about', function () {
        return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/download-cv', fn() => response()->download(public_path('TahiyatAhmed_CV.pdf')));


// Route::redirect('/profile','/pro');

Route::fallback(function(){
    return "<h1>Not found</h1>"; 
});