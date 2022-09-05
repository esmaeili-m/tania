<?php

namespace App\Http\Livewire\Home\Config;

use App\Models\SocialMedia;
use Livewire\Component;

class Footer extends Component
{
    public function render()
    {
        $social=SocialMedia::where('status',1)->latest()->first();
        return view('livewire.home.config.footer',compact('social'))->layout('layouts.home');
    }
}
