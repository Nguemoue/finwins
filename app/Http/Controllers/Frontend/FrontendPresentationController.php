<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Portrait;

class FrontendPresentationController extends Controller
{
    public function __invoke()
    {
        return view('frontend.presentation');
    }
}
