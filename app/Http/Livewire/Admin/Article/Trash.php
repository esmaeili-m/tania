<?php

namespace App\Http\Livewire\Admin\Article;

use App\Models\Article;
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

        Article::where('id',$id)->forceDelete();
        $this->emit('toast', 'success', ' مقاله به طور کامل حذف شد.');

    }

    public function Restore($id)
    {
        $name=Article::withTrashed()->where('id',$id)->first();
        $name->restore();
//        Log::create([
//            'name'=> auth()->user()->name,
//            'action'=> 'بازیابی',
//            'url'=>'بازیابی کاربر'.' '.':'.' '.$name['name']
//        ]);
        $this->emit('toast', 'success', ' مقاله بازیابی شد.');

    }
    public function render()
    {
        $article = DB::table('Articles')
            ->whereNotNull('deleted_at')->
            latest()->paginate(15);
        return view('livewire.admin.article.trash',compact('article'));
    }
}
