<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

// Route::get('/', function () {
//     return view('home');
// });
Route::group([],function(){
    Route::get('/',[ImageController::class,'indexhome'])->name('home');
Route::get('/imageform',[ImageController::class,'index'])->name('imageform');
Route::post('/imagestore',[ImageController::class,'store'])->name('imagestore');
Route::get('/imageview',[ImageController::class,'show'])->name('imageview');
Route::get('/imagedelete/{id}', [ImageController::class, 'delete'])->name('imagedelete');

});
