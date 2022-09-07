<?php

namespace App\Http\Livewire\Home\Article;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $articles=Article::where('status',1 )->latest()->paginate(4);
        return view('livewire.home.article.index',compact('articles'))->layout('layouts.other');
    }
}
