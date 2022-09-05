<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public function statusDisable($id)
    {
        $post = Post::find($id);
        $post->update([
            'status' => 0
        ]);
//        Log::create([
//            'user_id' => auth()->user()->id,
//            'url' => 'غیرفعال کردن وضعیت دسته' .'-'. $this->category->title,
//            'actionType' => 'غیرفعال'
//        ]);
        $this->emit('toast', 'success', 'وضعیت پست با موفقیت غیرفعال شد.');
    }

    public function statusEnable($id)
    {

        $post = Post::find($id);
        $post->update([
            'status' => 1
        ]);
//        Log::create([
//            'user_id' => auth()->user()->id,
//            'url' => 'فعال کردن وضعیت دسته' .'-'. $this->category->title,
//            'actionType' => 'فعال'
//        ]);
        $this->emit('toast', 'success', 'وضعیت پست با موفقیت فعال شد.');
    }
    public function deleteCategory($id)
    {
        $post = Post::find($id);
        $post->delete();
        $this->emit('toast', 'success', ' پست با موفقیت حذف شد.');

    }
    public function render()
    {
        $Posts = Post::where('name', 'LIKE', "%{$this->search}%")->
        latest()->paginate(10);
        return view('livewire.admin.post.index',compact('Posts'));
    }
}
