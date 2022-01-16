<?php

use App\Http\Controllers\SEO\MetaHTML;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $meta_tags = MetaHTML::getDefaults();
    return view('welcome', compact('meta_tags'));
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/SEO', function () {
    return view('admin.SEO');
})->middleware(['auth'])->name('SEO');

require __DIR__.'/auth.php';