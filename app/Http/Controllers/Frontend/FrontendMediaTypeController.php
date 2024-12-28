<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MediaType;

class FrontendMediaTypeController extends Controller
{
    public function __invoke(int $mediaTyeId)
    {
        $mediaType = MediaType::with('mediaGroups')->find($mediaTyeId);
        if (!$mediaType) {
            abort(404,"Page not found");
        }
        $mediaGroups = $mediaType->mediaGroups;

        return view('frontend.media.mediaDetail',[
            'mediaType'=>$mediaType,
            'mediaGroups'=>$mediaGroups,
        ]);
    }

    public function show(int $mediaTyeId,int $mediaGroupId)
    {
        $mediaType = MediaType::with('mediaGroups')->find($mediaTyeId);
        if (!$mediaType) {
            abort(404,"Page not found");
        }
        $mediaGroups = $mediaType->mediaGroups;

        return view('frontend.media.mediaDetail',[
            'mediaType'=>$mediaType,
            'mediaGroups'=>$mediaGroups,
        ]);
    }
}
