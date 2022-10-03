<?php

namespace App\Http\Livewire\Guitars;

use App\Models\Guitar;
use Livewire\Component;
use App\Events\UserLog;

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
            
            $guitar = Guitar::create([
                'guitar_name'       => $this->guitar_name,
                'brand'             => $this->brand,
                'material'          => $this->material,
                'year_model'        => $this->year_model,
                // 'email' => $this->email,
            ]);

            $log_entry = 'Added a new Guitar "' . $guitar->guitar_name . '" with the ID no. of ' .  $guitar->id;
            event(new UserLog($log_entry));

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
