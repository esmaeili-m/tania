<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    public $image;
    use WithFileUploads;
    public Post $post;
    public function mount()
    {
        $this->post = new Post();
    }
    protected $rules=[
        'post.description'=>'required' ,
        'post.name'=>'required',
        'post.category'=>'required'
    ];

    public function createpost(){
        $this->validate();
        $this ->post->image=$this->uploadImage();
        $this->post->save();
//        Log::create([
//            'user_id'=>auth()->user()->id,
//            'url'=>'افزودن موکاپ'.'_'.$this->mockup->name,
//            'actionType'=>'ایجاد'
//        ]);
        $this->emit('toast','success','پست جدید اپلود شد');
        return redirect(route('post'));
    }
    public function uploadImage(){
        $year=now()->year;
        $month=now()->month;
        $day=now()->day;
        $second=now()->second;
        $directory="post/$year/$month/$day/$second";
        $name=$this->image->getClientOriginalName();
        $this->image->storeAs($directory,$name);
        return "$directory".'/'."$name";
    }
    public function render()
    {
        return view('livewire.admin.post.create');
    }
}
