<?php

namespace App\Http\Livewire\Admin\Article;

use App\Models\Article;
use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;
    public $image;
    public Article $article;
    protected $rules=[
        'article.description'=>'required' ,
        'article.title'=>'required',
        'article.category'=>'required',
        'article.subcategory'=>'nullable',
    ];
    public function updatearticle(){

        if ($this->image) {
            $this->article->image = $this->uploadImage();
        }
        $this ->article->update($this->validate());
        return redirect(route('article'));
    }
    public function uploadImage(){
        $year=now()->year;
        $month=now()->month;
        $day=now()->day;
        $second=now()->second;
        $directory="article/$year/$month/$day/$second";
        $name=$this->image->getClientOriginalName();
        $this->image->storeAs($directory,$name);
        return "$directory".'/'."$name";
    }
    public function render()
    {
        return view('livewire.admin.article.update');
    }
}
