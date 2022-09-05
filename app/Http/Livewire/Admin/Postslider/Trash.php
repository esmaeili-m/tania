<?php

namespace App\Http\Livewire\Admin\Postslider;

use App\Models\PostSlider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Trash extends Component
{
    public function DeleteUser($id)
    {
        $a=DB::table('post_sliders')->whereNotNull('deleted_at')->where('id',$id);
        if(Storage::exists($a->value('image'))){
            Storage::delete($a->value('image'));
            $a->delete();
        }else{
            $this->emit('toast','success','فایل وجود ندارد');

        }
//        Slider::where('id',$id)->forceDelete();

    }

    public function Restore($id)
    {
        $name=PostSlider::withTrashed()->where('id',$id)->first();
        $name->restore();
//        Log::create([
//            'name'=> auth()->user()->name,
//            'action'=> 'بازیابی',
//            'url'=>'بازیابی کاربر'.' '.':'.' '.$name['name']
//        ]);
    }
    public function render()
    {
        $slider = DB::table('post_sliders')
            ->whereNotNull('deleted_at')->
            latest()->paginate(15);
        return view('livewire.admin.postslider.trash',compact('slider'));
    }
}
