<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LanguageController;

Route::middleware(['setLocale', 'mainSettings'])->group(function () {
    Route::get('/', [PageController::class, 'index'])->name('anasayfa');
    Route::get('/hakkimizda', [PageController::class, 'about'])->name('hakkimizda');
    Route::get('/iletisim', [PageController::class, 'contact'])->name('iletisim');
    Route::get('/hizmetler', [PageController::class, 'services'])->name('hizmetler');
    Route::get('/hizmetler/{slug}', [PageController::class, 'service'])->name('hizmet');

    Route::get('/language/{lang}', [LanguageController::class, 'switchLang'])->name('language');
    Route::get('/kategori/{slug}', [PageController::class, 'category'])->name('kategori.detay');
    Route::get('/ekibimiz', [PageController::class, 'team'])->name('ekibimiz');
    Route::get('/ekibimiz/{slug}', [PageController::class, 'team'])->name('ekibimiz.detay');

    Route::get('/blogs', [PageController::class, 'blog'])->name('blog');

    Route::get('/makale/{slug}', [PageController::class, 'blogDetail'])->name('blog.detay.tr');
    Route::get('/article/{slug}', [PageController::class, 'blogDetail'])->name('blog.detay.en');

    Route::post('/iletisim', [PageController::class, 'contactSend'])->name('iletisim.post');
    Route::post('/subscribe', [PageController::class, 'subscribe'])->name('subscribe.post');
    Route::post('/randevu', [PageController::class, 'randevu'])->name('randevu.post');
});
