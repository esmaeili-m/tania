<?php

namespace App\Http\Livewire\Admin\Slider;

use App\Models\Slider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    public $image;
    use WithFileUploads;
    public Slider $slider;

    protected $rules = [
        'slider.name' => 'required',
        'slider.title' => 'required',
        'slider.description' => 'required',
        'slider.position' => 'required',
    ];

    public function createslider(){

        if ($this->image) {
            Storage::delete($this->slider->image);
            $this->slider->image = $this->uploadImage();
        }
        $this ->slider->update($this->validate());

//        Log::create([
//            'user_id'=>auth()->user()->id,
//            'url'=>'افزودن موکاپ'.'_'.$this->mockup->name,
//            'actionType'=>'ایجاد'
//        ]);
        $this->emit('toast','success','اسلایدر اپدیت شد');
        return redirect(route('slider'));
    }
    public function uploadImage(){
        $year=now()->year;
        $month=now()->month;
        $day=now()->day;
        $second=now()->second;
        $directory="slider/$year/$month/$day/$second";
        $name=$this->image->getClientOriginalName();
        $this->image->storeAs($directory,$name);
        return "$directory".'/'."$name";
    }
    public function render()
    {
        return view('livewire.admin.slider.update');
    }
}
