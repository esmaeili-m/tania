<?php

namespace App\Http\Livewire\Home\Config;

use App\Models\SocialMedia;
use Livewire\Component;

class OtherHeader extends Component
{
    public function render()
    {
        $social=SocialMedia::where('status',1)->latest()->first();

        return view('livewire.home.config.other-header',compact('social'));
    }
}
