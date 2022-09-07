<?php

namespace App\Http\Livewire\Admin\SocialMedia;

use App\Models\SocialMedia;
use Livewire\Component;

class Index extends Component
{
    public $search;
    protected $queryString = ['search'];
    public SocialMedia $SocialMedia;
    public function mount()
    {
        $this->socialMedia = new SocialMedia();
    }
    protected $rules = [
        'socialMedia.instagram'=>'nullable',
        'socialMedia.telegram'=>'nullable',
        'socialMedia.whatsapp'=>'nullable',
        'socialMedia.linkedin'=>'nullable',
        'socialMedia.pinterest'=>'nullable',
        'socialMedia.email'=>'nullable',
        'socialMedia.phone'=>'nullable',
        'socialMedia.status'=>'nullable',
        'socialMedia.address'=>'nullable',
    ];


    public function categoryForm()
    {

        $a=array_filter(array_map('trim',array_filter($this->validate()['socialMedia'])));
        if (SocialMedia::count() !== 0){
            SocialMedia::latest()->take(1)->update($a);
            $this->emit('toast', 'success', ' شبکه های اجتماعی با موفقیت ایجاد شد.');

        }else{
            SocialMedia::query()->create($a);
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
        $category = SocialMedia::find($id);
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
        $category = SocialMedia::find($id);
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
        $category = SocialMedia::find($id);
        $category->delete();
        $this->emit('toast', 'success', ' شبکه های اجتماعی با موفقیت حذف شد.');
    }
    public function render()
    {
        $social=SocialMedia::latest()->take(1)->first();
        return view('livewire.admin.social-media.index',compact('social'));
    }
}
