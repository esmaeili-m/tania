<?php

namespace App\Http\Livewire\Admin\Article;

use App\Models\Article;
use Hekmatinasser\Verta\Verta;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    public $image;
    public $image2;
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
        'image'=>'required',
        'image2'=>'nullable',
    ];

    public function createarticle(){
        $this->validate();
        $this->article->date=Verta()->format('Y/m/d');
        $this ->article->image=$this->uploadImage();
        if($this->image2){
            $this ->article->image2=$this->uploadImage2();
        }
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
    public function uploadImage2(){
        $year=now()->year;
        $month=now()->month;
        $day=now()->day;
        $second=now()->second;
        $directory="article/$year/$month/$day/$second";
        $name=$this->image2->getClientOriginalName();
        $this->image2->storeAs($directory,$name);
        return "$directory".'/'."$name";
    }
    public function render()
    {
        return view('livewire.admin.article.create');
    }
}
