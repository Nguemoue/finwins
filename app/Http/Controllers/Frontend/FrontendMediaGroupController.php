<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MediaGroup;
use App\Models\MediaType;

class FrontendMediaGroupController extends Controller
{
    public function __invoke(int  $mediaGroupId)
    {
        $mediaGroup = MediaGroup::with('media')->findOrFail($mediaGroupId);
        return view('frontend.media.mediaGroupDetail',[
            'mediaGroup'=>$mediaGroup
        ]);
    }

}
