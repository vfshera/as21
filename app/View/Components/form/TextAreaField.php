<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class TextAreaField extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        public string $label = "",
        public string $name = "",
        public string $cols = "25",
        public string $rows = "10",
        public string $placeholder = "",
    ) {
        if ($name == "") {
            $this->name = strtolower($label);
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.text-area-field');
    }
}