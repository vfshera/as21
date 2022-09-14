<?php

namespace App\Http\Livewire;

use App\Models\AcademicLevel;
use App\Models\PaperType;
use App\Models\SubjectArea;
use Livewire\Component;

class PriceCalculator extends Component
{
    public $subjectAreas;
    public $academicLevels;
    public $paperTypes;

    public $services = ["Writing", "Rewriting", "Editing"];
    public $selectedService = 0;

    public function mount()
    {
        $this->subjectAreas = SubjectArea::all();
        $this->academicLevels = AcademicLevel::all();
        $this->paperTypes = PaperType::all();
    }
    public function render()
    {
        return view('livewire.price-calculator', ['paperTypes' => $this->paperTypes, 'academicLevels' => $this->academicLevels, 'subjectAreas' => $this->subjectAreas]);
    }
}