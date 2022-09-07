<?php

namespace App\Http\Livewire\Home\Categories;

use App\Models\Position;
use App\Models\Post;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Show extends Component
{
    public function render()
    {

        $post=Post::where('name',Request::segment(3))->where('status',1)->first();
        $posts=Post::where('category',$post['category'])->take(4)->get();
        $position=Position::latest()->take(1)->first()->value('position');
        return view('livewire.home.categories.show',compact('post','position','posts'))->layout('layouts.other');
    }
}
