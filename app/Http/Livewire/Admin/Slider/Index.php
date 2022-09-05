<?php

namespace App\Http\Livewire\Admin\Slider;

use App\Models\Setting;
use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function statusDisable($id)
    {
        $category = Slider::find($id);
        $category->update([
            'status' => 0
        ]);
//        Log::create([
//            'user_id' => auth()->user()->id,
//            'url' => 'غیرفعال کردن وضعیت دسته' .'-'. $this->category->title,
//            'actionType' => 'غیرفعال'
//        ]);
        $this->emit('toast', 'success', 'وضعیت دسته با موفقیت غیرفعال شد.');
    }

    public function statusEnable($id)
    {
        $category = Slider::find($id);
        $category->update([
            'status' => 1
        ]);
//        Log::create([
//            'user_id' => auth()->user()->id,
//            'url' => 'فعال کردن وضعیت دسته' .'-'. $this->category->title,
//            'actionType' => 'فعال'
//        ]);
        $this->emit('toast', 'success', 'وضعیت دسته با موفقیت فعال شد.');
    }


    public function deleteCategory($id)
    {
        $category = Slider::find($id);
        $category->delete();
    }
    public function render()
    {
        $sliders = Slider::latest()->paginate(5);
        return view('livewire.admin.slider.index',compact('sliders'));
    }
}
