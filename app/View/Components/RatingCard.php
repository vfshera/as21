<?php

namespace App\View\Components;

use App\Models\CustomerReview;
use Illuminate\View\Component;

class RatingCard extends Component
{
    public $review;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(CustomerReview $review)
    {

        $this->review = $review;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.rating-card');
    }
}