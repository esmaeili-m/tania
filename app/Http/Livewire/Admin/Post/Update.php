<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;
    public $image;
    public Post $post;
    protected $rules=[
        'post.name'=>'required',
        'post.description'=>'required',
        'post.category'=>'nullable',
//        'post.name'=>'required'
    ];
    public function createpost(){

        if ($this->image) {
            $this->post->image = $this->uploadImage();
        }
        $this ->post->update($this->validate());
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
        return view('livewire.admin.post.update');
    }
}
