<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/tutors', 'tutors.index')->name('tutors');
Route::view('/find-tutors', 'tutors.index');
Route::view('/live-doubts', 'live-doubts.index')->name('live-doubts');
Route::view('/subjects', 'subjects.index')->name('subjects');
Route::view('/home-tuition', 'home-tuition.index')->name('home-tuition');
Route::view('/pricing', 'pricing.index')->name('pricing');
Route::view('/become-a-tutor', 'become-tutor.index')->name('become-tutor');
Route::view('/about', 'about.index')->name('about');
Route::view('/contact', 'contact.index')->name('contact');
Route::view('/blog', 'blog.index')->name('blog');
