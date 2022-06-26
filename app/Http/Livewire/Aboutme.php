<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Aboutme extends Component
{
    public function render()
    {
        return view('livewire.aboutme')->layout('layouts.master');
    }
}
