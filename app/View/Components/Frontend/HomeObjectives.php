<?php

namespace App\View\Components\Frontend;

use App\Models\Objective;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\View\Component;

class HomeObjectives extends Component
{
    /**
     * @var Collection<Objective> $objectives
     */
    public Collection $objectives;
    public function __construct()
    {
        $this->objectives = Objective::all();
    }
    public function render(): View
    {
        return view('components.frontend.home-objectives');
    }
}
