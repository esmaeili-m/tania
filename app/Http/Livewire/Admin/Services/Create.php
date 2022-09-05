<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    public $image;
    use WithFileUploads;
    public Service $service;
    public function mount()

    {
        $this->service = new Service();
    }
    protected $rules = [
        'service.title' => 'required',
        'service.description' => 'required',
        'service.position' => 'required',
        ];

    public function createServices(){
        $this->validate();
        $this ->service->image=$this->uploadImage();
        $this->service->save();
//        Log::create([
//            'user_id'=>auth()->user()->id,
//            'url'=>'افزودن موکاپ'.'_'.$this->mockup->name,
//            'actionType'=>'ایجاد'
//        ]);
        $this->emit('toast','success','پست جدید اپلود شد');
        return redirect(route('services'));
    }
    public function uploadImage(){
        $year=now()->year;
        $month=now()->month;
        $day=now()->day;
        $second=now()->second;
        $directory="service/$year/$month/$day/$second";
        $name=$this->image->getClientOriginalName();
        $this->image->storeAs($directory,$name);
        return "$directory".'/'."$name";
    }
    public function render()
    {
        return view('livewire.admin.services.create');
    }
}
