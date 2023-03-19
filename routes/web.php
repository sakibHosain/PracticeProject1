<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\firstProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/",[firstProjectController::class, 'index'])-> name('view.student');
Route::get("/add",[firstProjectController::class, 'create'])-> name('create.student');
Route::post("/store",[firstProjectController::class, 'store'])-> name('store.student');
Route::get("/edit/{id}",[firstProjectController::class, 'edit'])-> name('edit.student');
Route::get("/show/{id}",[firstProjectController::class, 'show'])-> name('show.student');
Route::post("/update/{id}",[firstProjectController::class, 'update'])-> name('update.student');
Route::get("/delete/{id}",[firstProjectController::class, 'destroy'])-> name('delete.student');