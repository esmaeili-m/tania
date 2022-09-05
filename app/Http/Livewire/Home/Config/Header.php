<?php

namespace App\Http\Livewire\Home\Config;

use Livewire\Component;

class Header extends Component
{
    public function render()
    {
        return view('livewire.home.config.header')->layout('layouts.home');
    }
}
