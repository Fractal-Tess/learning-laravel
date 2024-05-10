<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

// Route::get("/note", [NoteController::class ,"index"])->name("note.show");
// Route::get("/note/create", [NoteController::class ,"create"])->name("note.create");
// Route::post("/note", [NoteController::class ,"store"])->name("note.store");
// Route::get("/note/{id}", [NoteController::class ,"show"])->name("note.show");
// Route::get("/note/{id}/edit", [NoteController::class ,"edit"])->name("note.edit");
// Route::put("", [NoteController::class ,"update"])->name("note.update");
// Route::delete("", [NoteController::class ,"delete"])->name("note.destroy");

Route::resource("note", NoteController::class);
