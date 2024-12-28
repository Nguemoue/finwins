<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PressEcho;

class FrontendMediaEchoPresseController extends Controller
{
    public function __invoke()
    {
        $presses = PressEcho::all();
        return view('frontend.media.echoPresse',[
            'presses'=>$presses
        ]);
    }
}
