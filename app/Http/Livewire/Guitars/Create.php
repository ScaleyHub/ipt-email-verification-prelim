<?php

namespace App\Http\Livewire\Guitars;

use App\Models\Guitar;
use Livewire\Component;

class Create extends Component
{
    public $guitar_name, $brand, $material, $year_model;

    public function addGuitar(){
     
            $this->validate([
                'guitar_name'       => ['required','string','max:255'],
                'brand'            => ['required','string','max:255'],
                'material'     => ['required','string','max:255'],
                'year_model'         => ['required','string','max:255'],
                // 'email'   =>  ['required','email','unique:guitars'],
            
            ]);
    
            Guitar::create([
                'guitar_name'        => $this->guitar_name,
                'brand'             => $this->brand,
                'material'      => $this->material,
                'year_model'          => $this->year_model,
                // 'email' => $this->email,
            ]);

            return redirect('/dashboard')->with('message', $this->guitar_name . ' added successfully');
    }

    // public function updated($propertyEmail)
    // {
    //     $this->validateOnly($propertyEmail, [
    //         'email'             => ['required','email','unique:guitars'],
            
    //     ]);
    // }

    public function render()
    {
        return view('livewire.guitars.create');
    }
}
