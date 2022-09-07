<?php

namespace App\Http\Livewire\Home\About;

use App\Models\Service;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $service=Service::where('status',1)->get();
        return view('livewire.home.about.index',compact('service'))->layout('layouts.other');
    }
}
