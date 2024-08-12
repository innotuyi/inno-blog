<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get("/about", function(){

    return view('about');
})->name('about');

//categories crud


Route::get("/categories", [CategoryController::class, 'index'])->name('categories');
Route::post("/create-category", [CategoryController::class, 'create'])->name('create-category');
Route::get("/single-category/{id}", [CategoryController::class, 'show'])->name('single-category');
Route::put("/update-category/{id}", [CategoryController::class, 'edit'])->name('update-category');
Route::delete("/delete-category/{id}", [CategoryController::class, 'edit'])->name('delete-category');







require __DIR__.'/auth.php';
