<?php

namespace App\Http\Livewire\Backend\Subcategories;

use App\Models\Category;
use App\Models\SubCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class CreateSubCategories extends Component
{
    public $success_message;
    public $category;
    public $subCategoryName;

    public function store()
    {
        $this->validate([
            'category'=>'required',
            'subCategoryName' => 'required|min:2|unique:sub_categories,sub_category_name'
        ]);

       SubCategory::create([
           'category_id' => $this->category,
           'sub_category_name' => $this->subCategoryName,
           'slug' => Str::slug($this->subCategoryName)
       ]);

       $this->reset();
       $this->success_message= 'Sub Category Added Successfully';
    }

     //real-time validation
     protected $rules = [
        'category' =>'required',
        'subCategoryName' => 'required|min:2|unique:sub_categories,sub_category_name'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.backend.subcategories.create-sub-categories',
    
        ['categories' => $categories]
    );
    }
}
