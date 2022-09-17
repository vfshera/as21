<?php

namespace App\View\Components\dashboard;

use Illuminate\View\Component;

class Sidebar extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $navs = [])
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.sidebar');
    }
}