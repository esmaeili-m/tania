<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Trash extends Component
{
    public $search;
    protected $queryString = ['search'];

    public function DeleteUser($id)
    {

        Category::where('id',$id)->forceDelete();
    }

    public function Restore($id)
    {
        $name=Category::withTrashed()->where('id',$id)->first();
        $name->restore();
//        Log::create([
//            'name'=> auth()->user()->name,
//            'action'=> 'بازیابی',
//            'url'=>'بازیابی کاربر'.' '.':'.' '.$name['name']
//        ]);
    }
    public function render()
    {
        $category = DB::table('categories')
            ->whereNotNull('deleted_at')->
            latest()->paginate(15);
        return view('livewire.admin.category.trash',compact('category'));
    }
}
