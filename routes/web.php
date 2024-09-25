<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\CategoryController;
use App\Http\Controllers\Site\BlogController;
use App\Http\Controllers\Site\ContactController;

// Parte estática do Site
Route::namespace('Site')->group(function () {
    Route::get('/', [HomeController::class, '__invoke'])->name(name:'site.home');
    
    Route::get('produtos', [CategoryController::class, 'index'])->name(name: 'site.products');
    Route::get('produtos/{slug}', [CategoryController::class, 'show'])->name(name: 'site.products.category');

    Route::get('blog', [BlogController::class, '__invoke'])->name(name: 'site.blog');

    Route::view('sobre',view:'site.about.index')->name(name: 'site.about');

    Route::get('contato',[ContactController::class,'index'])->name(name: 'site.contact');
    Route::post('contato',[ContactController::class,'form'])->name(name: 'site.contact.form');
});

// Parte do CMS do site
