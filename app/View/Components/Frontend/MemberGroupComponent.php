<?php

namespace App\View\Components\Frontend;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class MemberGroupComponent extends Component
{
    public function __construct(public string $groupName,public Collection $members)
    {
    }

    public function render(): View
    {
        return view('components.frontend.member-group-component');
    }
}
