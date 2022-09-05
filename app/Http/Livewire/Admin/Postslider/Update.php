<?php

namespace App\Http\Livewire\Admin\Postslider;

use App\Models\PostSlider;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    public $image;
    use WithFileUploads;
    public PostSlider $postSlider;
    
    protected $rules=[
        'postSlider.title'=>'required' ,
    ];

    public function createslider(){

        if ($this->image) {
            Storage::delete($this->postSlider->image);
            $this->postSlider->image = $this->uploadImage();
        }
        $this ->postSlider->update($this->validate());

//        Log::create([
//            'user_id'=>auth()->user()->id,
//            'url'=>'افزودن موکاپ'.'_'.$this->mockup->name,
//            'actionType'=>'ایجاد'
//        ]);
        $this->emit('toast','success','اسلایدر اپدیت شد');
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
        return view('livewire.admin.postslider.update');
    }
}
