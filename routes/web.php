<?php

use App\Http\Controllers\LandingPage;
use Illuminate\Support\Facades\Route;



Route::get('/',[LandingPage::class ,'landingPage'])->name('LandingPage');
