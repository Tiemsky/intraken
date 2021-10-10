<?php

namespace App\Http\Livewire\Backend\Categories;

use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\Component;

class CreateCategories extends Component
{

    public $categoryName;
    public $class;
    public $success_message;
    public function store()
    {
        $this->validate([
            'categoryName' =>'required|string|min:2|max:40|unique:categories,category_name',
            'class' => 'required|string|max:1024'
        ]);

        // $getExtension = $this->image->getClientOriginalExtension();
        // $new_name = time().'.'.$getExtension;
        // $this->image->storeAs($this->path, $new_name);
       
        Category::create([
            'category_name' => $this->categoryName,
            'slug' => Str::slug($this->categoryName),
            'class' => $this->class,
        ]);

        $this->reset();
        $this->success_message = 'New Category Added successfully!';
    }

    
    //real-time validation
    protected $rules = [
        'categoryName' =>'required|string',
        'class' => 'required|string'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.backend.categories.create-categories');
    }
}
