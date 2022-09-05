<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Trash extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];

    public function DeleteUser($id)
    {

        Post::where('id',$id)->forceDelete();
        $this->emit('toast', 'success', ' پست به طور کامل حذف شد.');

    }

    public function Restore($id)
    {
        $name=Post::withTrashed()->where('id',$id)->first();
        $name->restore();
//        Log::create([
//            'name'=> auth()->user()->name,
//            'action'=> 'بازیابی',
//            'url'=>'بازیابی کاربر'.' '.':'.' '.$name['name']
//        ]);
        $this->emit('toast', 'success', ' پست بازیابی شد.');

    }
    public function render()
    {
        $post = DB::table('Posts')
        ->whereNotNull('deleted_at')->
        latest()->paginate(15);
        return view('livewire.admin.post.trash',compact('post'));
    }
}
