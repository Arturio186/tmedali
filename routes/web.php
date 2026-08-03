<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\PartnerController;

Route::view('/', 'pages.home')
    ->middleware('track.page.views')
    ->name('home');

Route::view('/about', 'pages.about')
    ->middleware('track.page.views')
    ->name('about');

Route::get('/catalog', [CatalogController::class, 'index'])
    ->middleware('track.page.views')
    ->name('catalog');

Route::get('/partners', [PartnerController::class, 'index'])
    ->middleware('track.page.views')
    ->name('partners');

Route::post('/requests', [App\Http\Controllers\RequestController::class, 'store'])
    ->name('requests.store');

Route::view('/prices', 'pages.prices')
    ->middleware('track.page.views')
    ->name('prices');

Route::view('/works', 'pages.works')
    ->middleware('track.page.views')
    ->name('works');

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RequestController;

Route::prefix('admin')->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'login'])->name('admin.login');
        Route::post('/login', [AuthController::class, 'authenticate']);
    });

    Route::middleware('auth')->group(function () {
        Route::get('/', DashboardController::class)
            ->name('admin.dashboard');

        Route::resource('products', ProductController::class)
            ->except(['show'])
            ->names('admin.products');

        Route::resource('partners', App\Http\Controllers\Admin\PartnerController::class)
            ->except(['show'])
            ->names('admin.partners');

        Route::resource('requests', RequestController::class)
            ->only(['index', 'destroy'])
            ->names('admin.requests');

        Route::get(
            'requests/{request}/download',
            [RequestController::class, 'download']
        )->name('admin.requests.download');

        Route::post('/logout', [AuthController::class, 'logout'])
            ->name('admin.logout');
    });

});