<?php

namespace App\Http\Livewire\Admin\Postslider;

use App\Models\PostSlider;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Create extends Component
{
    public $image;
    use WithFileUploads;
    public PostSlider $postSlider;
    public function mount()
    {
        $this->postSlider = new PostSlider();
    }
    protected $rules=[
        'postSlider.title'=>'required' ,
    ];

    public function createslider(){
        $this->validate();
        $this ->postSlider->image=$this->uploadImage();
        $this->postSlider->save();
//        Log::create([
//            'user_id'=>auth()->user()->id,
//            'url'=>'افزودن موکاپ'.'_'.$this->mockup->name,
//            'actionType'=>'ایجاد'
//        ]);
        $this->emit('toast','success','اسلایدر جدید اپلود شد');
        return redirect(route('postSlider'));
    }
    public function uploadImage(){
        $year=now()->year;
        $month=now()->month;
        $day=now()->day;
        $second=now()->second;
        $directory="postSlider/$year/$month/$day/$second";
        $name=$this->image->getClientOriginalName();
        $this->image->storeAs($directory,$name);
        return "$directory".'/'."$name";
    }
    public function render()
    {
        return view('livewire.admin.postslider.create');
    }
}
