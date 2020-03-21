<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IndexComponent extends Component
{
    public $name = 'ajay';
    public function render()
    {
        return view('livewire.index-component');
    }
}
