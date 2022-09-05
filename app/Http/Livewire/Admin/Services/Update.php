<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    public $image;
    use WithFileUploads;
    public Service $service;
    protected $rules = [
        'service.title' => 'required',
        'service.description' => 'required',
        'service.position' => 'required',
    ];

    public function createServices(){

        if ($this->image) {
            Storage::delete($this->service->image);
            $this->service->image = $this->uploadImage();
        }
        $this ->service->update($this->validate());

//        Log::create([
//            'user_id'=>auth()->user()->id,
//            'url'=>'افزودن موکاپ'.'_'.$this->mockup->name,
//            'actionType'=>'ایجاد'
//        ]);
        $this->emit('toast','success','سرویس اپدیت شد');
        return redirect(route('services'));
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
        return view('livewire.admin.services.update');
    }
}
