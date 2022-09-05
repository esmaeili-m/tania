<?php

namespace App\Http\Livewire\Admin\Article;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public function statusDisable($id)
    {
        $post = Article::find($id);
        $post->update([
            'status' => 0
        ]);
//        Log::create([
//            'user_id' => auth()->user()->id,
//            'url' => 'غیرفعال کردن وضعیت دسته' .'-'. $this->category->title,
//            'actionType' => 'غیرفعال'
//        ]);
        $this->emit('toast', 'success', 'وضعیت مقاله با موفقیت غیرفعال شد.');
    }

    public function statusEnable($id)
    {

        $post = Article::find($id);
        $post->update([
            'status' => 1
        ]);
//        Log::create([
//            'user_id' => auth()->user()->id,
//            'url' => 'فعال کردن وضعیت دسته' .'-'. $this->category->title,
//            'actionType' => 'فعال'
//        ]);
        $this->emit('toast', 'success', 'وضعیت مقاله با موفقیت فعال شد.');
    }
    public function deleteCategory($id)
    {
        $post = Article::find($id);
        $post->delete();
        $this->emit('toast', 'success', ' مقاله با موفقیت حذف شد.');

    }
    public function render()
    {
        $article = Article::where('title', 'LIKE', "%{$this->search}%")->
        latest()->paginate(10);
        return view('livewire.admin.article.index',compact('article'));
    }
}
