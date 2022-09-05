<?php

namespace App\Http\Livewire\Admin\Services;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function statusDisable($id)
{
    $category = Service::find($id);
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
        $category = Service::find($id);
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
        $category = Service::find($id);
        $category->delete();
    }
    public function render()
    {

        $services = Service::latest()->paginate(5);
        return view('livewire.admin.services.index',compact('services'));
    }
}
