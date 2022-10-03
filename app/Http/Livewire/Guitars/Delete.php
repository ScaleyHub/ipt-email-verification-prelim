<?php

namespace App\Http\Livewire\Guitars;

use App\Models\Guitar;
use Livewire\Component;
use App\Events\UserLog;

class Delete extends Component
{
    public $guitarId;
    public function getGuitarProperty() {
        return Guitar::select('id','guitar_name', 'brand', 'material', 'year_model')
            ->find($this->guitarId);
    }

    public function delete() {
        $this->guitar->delete();

        
       $log_entry = 'Deleted Guitar "' . $this->guitar->guitar_name . '"with the ID no. ' .$this->guitar->id;
       event(new UserLog($log_entry));

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
