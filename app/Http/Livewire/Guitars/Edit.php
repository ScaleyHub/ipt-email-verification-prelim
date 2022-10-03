<?php

namespace App\Http\Livewire\Guitars;

use App\Models\Guitar;
use Livewire\Component;
use App\Events\UserLog;

class Edit extends Component
{
    public $guitarId;
    public $guitar_name, $brand, $material, $year_model;

    public function mount() {
        $this->guitar_name             = $this->guitar->guitar_name;
        $this->brand            = $this->guitar->brand;
        $this->material          = $this->guitar->material;
        $this->year_model   = $this->guitar->year_model;

    }

    public function editGuitar() {
        $this->validate([
            'guitar_name'              => ['required','string','max:255'],
            // 'email'             => ['required','email','unique:students'],
            'brand'           => ['required','string','max:255'],
            'material'    => ['required','string','max:255'],
            'year_model'    => ['required','string','max:255'],
           
        ]);

        $this->guitar->update([
            'guitar_name'              => $this->guitar_name,
            'brand'           => $this->brand,
            'material'    => $this->material,
            'year_model'             => $this->year_model,
            
        ]);

       $log_entry = 'Updated "' . $this->guitar_name . '"with the ID no. ' .$this->guitar->id;
       event(new UserLog($log_entry));

        return redirect('/dashboard')->with('message', $this->guitar->guitar_name .' updated successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }

    public function getGuitarProperty() {
        return Guitar::find($this->guitarId);
    }

    public function render()
    {
        return view('livewire.guitars.edit');
    }
}
