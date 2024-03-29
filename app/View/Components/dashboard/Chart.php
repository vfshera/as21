<?php

namespace App\View\Components\dashboard;

use Illuminate\View\Component;

class Chart extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public $id = 'chart', public $type = 'line')
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.dashboard.chart');
    }
}