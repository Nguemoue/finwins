<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Agenda;

class FrontendAgendaController extends Controller
{
    public function __invoke()
    {
        $agenda = Agenda::query()->get();
        return view('frontend.agenda',[
            'agenda'=>$agenda
        ]);
    }
}
