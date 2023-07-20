<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Facades\Agent;

class PublicController extends Controller
{
    public function landing_page()
    {
        return view('dashboard');
    }
}
