<?php

namespace App\Http\Livewire\Guitars;

use App\Models\Guitar;
use Livewire\Component;

class Index extends Component
{
    public function loadGuitars() {
        $guitars = Guitar::orderBy('guitar_name')->get();

        return compact('guitars');
    }

    public function render()
    {
        return view('livewire.guitars.index', $this->loadGuitars());
    }
}
