<?php

namespace App\Http\Livewire\Admin\Social;

use App\Models\Soical;
use Livewire\Component;

class Index extends Component
{
    public $search;
    protected $queryString = ['search'];
    public Soical $soical;
    public function mount()
    {
        $this->social = new Soical();
    }
    protected $rules = [
        'social.instagram'=>'nullable',
        'social.telegram'=>'nullable',
        'social.whatsapp'=>'nullable',
        'social.linkedin'=>'nullable',
        'social.pinterest'=>'nullable',
        'social.email'=>'nullable',
        'social.phone'=>'nullable',
        'social.status'=>'nullable',
    ];


    public function categoryForm()
    {

        $a=array_filter(array_map('trim',array_filter($this->validate()['social'])));
        if (Soical::count() !== 0){
             Soical::latest()->take(1)->update($a);

        }else{
            Soical::query()->create($this->validate());
            $this->emit('toast', 'success', ' شبکه های اجتماعی با موفقیت ایجاد شد.');
        }
//        Log::create([
//            'user_id' => auth()->user()->id,
//            'url' => 'افزودن دسته' .'-'. $this->category->title,
//            'actionType' => 'ایجاد'
//        ]);

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
        $social=Soical::latest()->take(1)->get();
        dd($social);
        return view('livewire.admin.social.index',with(
            ['social'=> Soical::latest()->take(1)->get()]
        ));
    }
}
