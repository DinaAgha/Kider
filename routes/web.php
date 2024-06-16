<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front;
use App\Http\Controllers\Join;

Route::post('insertKid',[Join::class,'store'])->name('insertKid');
Route::get('join',[Join::class,'create'])->name('join');
Route::get('kids',[Join::class,'index'])->name('kids');
Route::get('editKids/{id}',[Join::class,'edit'])->name('editKids');
Route::put('updateKids/{id}',[Join::class,'update'])->name('updateKids');
Route::get('showkids/{id}',[Join::class,'show'])->name('showkids');
Route::delete('delKid',[Join::class,'destroy'])->name('delKid');
Route::delete('forceDeleteKid',[join::class,'forceDelete'])->name('forceDeleteKid');
Route::get('trashKid',[Join::class,'trash'])->name('trashKid');
Route::get('restoreKid/{id}',[Join::class,'restore'])->name('restoreKid');

Route::get('/', function () {
    return view('test');
});
Route::get('/about',function(){
    return view('layouts.about');
});


Route::get('/home',function(){
    return view('layouts.main');
});
Route::get('/',[Front::class,'home']);
Route::get('/about',[Front::class,'about']);
Route::get('/classes',[Front::class,'classes']);
Route::get('/home',[Front::class,'home']);
Route::get('/contact',[Front::class,'contact']);
Route::get('/Sign',[Front::class,'Sign']);
Route::get('/dashboard',[Front::class,'dashboard']);


// Route::get('/join',[Join::class,'join']);
Route::get('/teacher',[Join::class,'call']);

// Route::get('/classes',function(){
//     return view('layouts.classes');
// });