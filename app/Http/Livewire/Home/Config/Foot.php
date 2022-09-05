<?php

namespace App\Http\Livewire\Home\Config;

use Livewire\Component;

class Foot extends Component
{
    public function render()
    {
        return view('livewire.home.config.foot')->layout('layouts.home');
    }
}
