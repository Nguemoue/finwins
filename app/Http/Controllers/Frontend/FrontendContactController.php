<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Donator;
use App\Models\Setting;

class FrontendContactController extends Controller
{
    public function __invoke()
    {
        $givers = Donator::all();
        $settings = Setting::all()->pluck(value: "value", key: 'label');
        return view('frontend.contact',[
            'givers'=>$givers,
            'email' => $settings->get('email',''),
            'phoneNumber' => $settings->get('phone_number',''),
            'faxNumber' => $settings->get('fax_number',''),
            'bankAccount' => $settings->get('bank_account',''),
        ]);
    }
}
