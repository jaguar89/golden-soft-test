<?php

namespace App\Livewire;

use App\Models\Technician;
use Livewire\Component;

class Technicians extends Component
{
    public $technicians = [];

    public function render()
    {
        $this->technicians = Technician::all();
        return view('livewire.technicians' );
    }
}
