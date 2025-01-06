<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting;

class FrontendHomeController extends Controller
{
    public function __invoke()
    {
        return view('frontend.home',[
            'homePresentationText' => Setting::homePresentationText()
        ]);
    }
}
