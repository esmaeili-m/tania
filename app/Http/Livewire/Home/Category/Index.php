<?php

namespace App\Http\Livewire\Home\Category;

use App\Models\Position;
use App\Models\Post;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class Index extends Component
{

    public $search;
    public function render()
    {

        $post=Post::where('category',Request::segment(2))->where('status',1)->
        latest()->paginate(10);
        $position=Position::latest()->take(1)->first()->value('position');
        return view('livewire.home.category.index',compact('post','position'))->layout('layouts.other');
    }
}
