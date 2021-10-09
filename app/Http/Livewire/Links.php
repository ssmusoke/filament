<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Link;

class Links extends Component
{
    public function render()
    {
        return view('livewire.links', ['links' => Link::all()]);
    }
}
