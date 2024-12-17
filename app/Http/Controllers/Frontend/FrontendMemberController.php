<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Member;

class FrontendMemberController extends Controller
{
    public function __invoke()
    {
        $members = Member::with(['memberCategory'])->get();
        return view('frontend.members',[
            'members'=>$members
        ]);
    }
}
