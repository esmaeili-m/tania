<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    public $parent;
    protected $queryString = ['search'];
    public Category $category;
    public function mount()
    {
        $this->category = new Category();
    }
    protected $rules = [
        'category.name' => 'required',
    ];
    protected $messages = [
        'category.name.required' => 'نوشتن نام دسته الزامیست.',
    ];
//    public function updated($title)
//    {
//        $this->validateOnly($title);
//    }
    public function categoryForm()
    {

//        dd($this->parent);
        $this->validate();
       
        Category::query()->create([
            'name'=>$this->category->name,
            'parent'=>$this->parent,
        ]);

//        Log::create([
//            'user_id' => auth()->user()->id,
//            'url' => 'افزودن دسته' .'-'. $this->category->title,
//            'actionType' => 'ایجاد'
//        ]);
        $this->category['name']='';
        $this->emit('toast', 'success', ' دسته با موفقیت ایجاد شد.');
        return redirect(route('category'));
    }



    public function statusDisable($id)
    {
        $category = Category::find($id);
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
        $category = Category::find($id);
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
        $category = Category::find($id);
        $subcategory=Category::where('parent',$category['name'])->first();
        if ($subcategory == null){
            $category->delete();

            $this->emit('toast', 'success', ' دسته با موفقیت حذف شد.');

        }else
            $this->emit('toast', 'error', ' امکان حذف وجود ندارد زیرا دارای زیر دسته است.');
    }
    public function render()
    {
        $categories = Category::where('name', 'LIKE', "%{$this->search}%")->
        latest()->paginate(10);
        return view('livewire.admin.category.index',compact('categories'));
    }
}
