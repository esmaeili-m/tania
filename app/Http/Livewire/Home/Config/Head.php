<?php

namespace App\Http\Livewire\Home\Config;

use Livewire\Component;

class Head extends Component
{
    public function render()
    {
        return view('livewire.home.config.head')->layout('layouts.home');
    }
}
