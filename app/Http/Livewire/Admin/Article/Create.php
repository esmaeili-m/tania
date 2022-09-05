<?php

namespace App\Http\Livewire\Admin\Article;

use App\Models\Article;
use Hekmatinasser\Verta\Verta;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    public $image;
    use WithFileUploads;
    public Article $article;
    public function mount()
    {
        $this->article = new Article();
    }
    protected $rules=[
        'article.description'=>'required' ,
        'article.title'=>'required',
        'article.category'=>'required',
        'article.subcategory'=>'nullable',
    ];

    public function createarticle(){
        $this->validate();
        $this->article->date=Verta()->format('Y/m/d');
        $this ->article->image=$this->uploadImage();
        $this->article->save();
//        Log::create([
//            'user_id'=>auth()->user()->id,
//            'url'=>'افزودن موکاپ'.'_'.$this->mockup->name,
//            'actionType'=>'ایجاد'
//        ]);
        $this->emit('toast','success','مقاله جدید اپلود شد');
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
        return view('livewire.admin.article.create');
    }
}
