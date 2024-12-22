<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Agenda;

class FrontendAboutController extends Controller
{
    public function __invoke()
    {
        return view('frontend.about');
    }
}
