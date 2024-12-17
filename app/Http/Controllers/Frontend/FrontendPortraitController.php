<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Member;
use App\Models\Portrait;

class FrontendPortraitController extends Controller
{
    public function __invoke()
    {
        $portraits = Portrait::query()->get();
        return view('frontend.portraits',[
            'portraits'=>$portraits
        ]);
    }
}
