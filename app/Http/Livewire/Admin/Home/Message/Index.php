<?php

namespace App\Http\Livewire\Admin\Home\Message;


use App\Models\Message;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function deleteCategory($id)
    {
        $category = Message::find($id);
        $category->delete();
        $this->emit('toast', 'success', ' پیام با موفقیت حذف شد.');
    }
    public function render()
    {
        $message=Message::latest()->paginate(50);
        return view('livewire.admin.home.message.index',compact('message'));
    }
}
