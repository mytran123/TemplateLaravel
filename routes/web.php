<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('backend.layout.master');
});

Route::prefix('/note')->group(function () {
    Route::get('/',[NoteController::class,"index"])->name("notes.index");
    Route::get('/create',[NoteController::class,"showFormCreate"])->name("notes.showFormCreate");
    Route::post('/create',[NoteController::class,"create"])->name("notes.create");
    Route::get('/{id}/detail',[NoteController::class,"showDetail"])->name("notes.showDetail");
    Route::get('/{id}/update',[NoteController::class,"showFormUpdate"])->name("notes.showFormUpdate");
    Route::post('/{id}/update',[NoteController::class,"update"])->name("notes.update");
    Route::get('/{id}/delete',[NoteController::class,"destroy"])->name("notes.delete");
});
