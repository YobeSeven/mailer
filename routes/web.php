<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

// *----------------* //

Route::get("/" , [HomeController::class , "index"])->name("home.index");

Route::post("/mail/store" , [MailController::class , "store"])->name("mail.store");
