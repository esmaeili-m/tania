<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class Update extends Component
{
    public Category $category;
    
    protected $rules=[
     'category.name'=> 'required',
     'category.parent'=> 'nullable'
    ];

    public function update()
    {
        $this->validate();
        $category=Category::find($this->category->id);
        $category->update([
            'name'=>$this->category->name,
            'parent'=>$this->category->parent,
        ]);
        return redirect(route('category'));
    }
    public function render()
    {
        return view('livewire.admin.category.update');
    }
}
