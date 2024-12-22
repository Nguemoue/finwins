<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'=>['required','string'],
            'email'=>['required','email'],
            'message'=>['required','string'],
        ]);
        //TODO send contact form
        return response()->json( 'message sent successfully');
    }
}
