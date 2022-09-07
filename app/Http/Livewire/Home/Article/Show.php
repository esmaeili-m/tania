<?php

namespace App\Http\Livewire\Home\Article;

use App\Models\Article;
use Illuminate\Support\Facades\Request;
use Livewire\Component;


class Show extends Component
{
   
    
    public function render()
    {
        $title=Request::segment(2); 
        $article=Article::where('title',$title)->where('status',1)->first();
        return view('livewire.home.article.show',compact('article'))->layout('layouts.other');
    }
}
