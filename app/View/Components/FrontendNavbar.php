<?php

namespace App\View\Components;

use App\Models\MediaType;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class FrontendNavbar extends Component
{
    public Collection $mediaTypes;
    public function __construct()
    {
        $this->mediaTypes = MediaType::all();
    }

    public function render(): View
    {
        return view('components.frontend-navbar');
    }
}
