<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPage extends Controller
{
    public function landingPage()
    {
        return view('LandingPage.welcome');
    }
}
