<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class RadioField extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(public string $label = "",
        public string $name = "", ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.radio-field');
    }
}