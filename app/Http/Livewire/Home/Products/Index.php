<?php

namespace App\Http\Livewire\Home\Products;

use App\Models\Position;
use App\Models\Post;
use Livewire\Component;

class Index extends Component
{
    public $search;
    public function render()
    {
        $post=Post::where('status',1)->where('name', 'LIKE', "%{$this->search}%")->
        latest()->paginate(10);
        $position=Position::latest()->take(1)->first()->value('position');
        return view('livewire.home.products.index',compact('post','position'))->layout('layouts.other');
    }
}
