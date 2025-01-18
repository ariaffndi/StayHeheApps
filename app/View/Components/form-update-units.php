<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FormUpdateUnits extends Component
{
    public $unit;

    public function __construct($unit)
    {
        $this->unit = $unit;
    }

    public function render()
    {
        return view('components.form-update-units');
    }
}