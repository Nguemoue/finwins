<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Portrait;
use App\Models\Setting;

class FrontendPresentationController extends Controller
{
    public function __invoke()
    {
        return view('frontend.presentation',[
            'founderPosterUrl'=>Setting::founderPosterUrl(),
            'founderName' => Setting::founderName(),
            'presentationHtml'=>Setting::presentationHml(),
            'founderPresentation' => Setting::founderPresentation(),
            'founderDeclaration' => Setting::founderDeclaration()
        ]);
    }
}
