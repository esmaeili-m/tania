<?php

namespace App\Http\Livewire\Home;

use App\Models\Article;
use App\Models\Post;
use App\Models\PostSlider;
use App\Models\Service;
use App\Models\Slider;
use Livewire\Component;

class Index extends Component
{    public $counter=0;
    public function render()
    {
        $sliders=Slider::where('status',1)->get();
        $service=Service::where('status',1)->get();
        $posts=PostSlider::where('status',1)->get();
        $article=Article::whereNotNull('image2')->where('status',1)->take(3)->get();
        return view('livewire.home.index',compact('sliders','service','posts','article'))->layout('layouts.home');
    }
}
