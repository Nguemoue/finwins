<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting;

class FrontendMediaDossierPresseController extends Controller
{
    public function __invoke()
    {
        $content = str(Setting::whereLabel('president_speeches')->first()->value??'')->toHtmlString();

        return view('frontend.media.dossierPresse',[
            'content' => $content
        ]);
    }
}
