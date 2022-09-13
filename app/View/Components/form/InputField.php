<?php

namespace App\View\Components\form;

use Illuminate\View\Component;

class InputField extends Component
{

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(

        public string $label = "",

        public string $inputType = "text",

        public string $name = "",

        public string $placeholder = "",

        public string $value = "",

        public bool $noLabel = false,

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
        return view('components.form.input-field');
    }
}