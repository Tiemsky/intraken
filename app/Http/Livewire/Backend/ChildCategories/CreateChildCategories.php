<?php

namespace App\Http\Livewire\Backend\ChildCategories;

use App\Models\ChildCategory;
use App\Models\SubCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateChildCategories extends Component
{
    public $success_message;
    public $subCategory;
    public $childCategoryName;


    public function store()
    {

        $this->validate([
            'subCategory'=>'required',
            'childCategoryName' => 'required|min:2|'
        ]);

            ChildCategory::create([
           'sub_category_id' => $this->subCategory,
           'child_category_name' => $this->childCategoryName,
           'slug' => Str::slug($this->childCategoryName)
       ]);

       $this->reset();
       $this->success_message= 'Child Category Added Successfully';
    }

     //real-time validation
     protected $rules = [
        'subCategory'=>'required',
            'childCategoryName' => 'required|min:2|'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        $subCategories = SubCategory::all();
        return view('livewire.backend.child-categories.create-child-categories',
        ['subCategories' => $subCategories]
    
    );
    }
}
