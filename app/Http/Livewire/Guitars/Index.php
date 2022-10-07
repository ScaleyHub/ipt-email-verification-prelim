<?php

namespace App\Http\Livewire\Guitars;

use App\Models\Guitar;
use Livewire\Component;
use Livewire\WithPagination;
class Index extends Component
{
    public $search, $brand = 'all', $material = 'all';
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public function loadGuitars() 
    {
        $query = Guitar::orderBy('guitar_name')
                ->search($this->search);
        
        if($this->brand != 'all'){
            $query->where('brand', $this->brand);
        }

        if($this->material != 'all'){
            $query->where('material', $this->material);
        }
        
        $guitars = $query->paginate(3);

        return compact('guitars');
    }

    public function render()
    {
        return view('livewire.guitars.index', $this->loadGuitars());
    }
}
