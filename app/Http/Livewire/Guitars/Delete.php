<?php

namespace App\Http\Livewire\Guitars;

use App\Models\Guitar;
use Livewire\Component;

class Delete extends Component
{
    public $guitarId;
    public function getGuitarProperty() {
        return Guitar::select('id','guitar_name', 'brand', 'material', 'year_model')
            ->find($this->guitarId);
    }

    public function delete() {
        $this->guitar->delete();

        return redirect('/dashboard')->with('message', $this->guitar->guitar_name . ' deleted successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }

    public function render()
    {
        return view('livewire.guitars.delete');
    }
}
