<?php

namespace App\Http\Livewire\Backend\ChildCategories;

use App\Models\ChildCategory;
use App\Models\SubCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class ManageChildCategories extends Component
{
    public $success_message;
    public $childCategoryName;
    public $subCategory_id;
    public $subCategory=[];

    public function editChildCategory($id)
    {
        
        $this->subCategory = ChildCategory::findOrFail($id); 
        $this->childCategoryName = $this->subCategory->child_category_name;
        //dd($this->childCategoryName );
    }

    public function update()
    {
        if($this->subCategory_id == null)
        {
            $this->validate(['childCategoryName' => 'required|min:2|unique:child_categories,child_category_name']);
            ChildCategory::findOrFail($this->subCategory['id'])
                        ->update([
                            'child_category_name' => $this->childCategoryName,
                            'slug'=> Str::slug($this->childCategoryName)
                        ]);
        }else{
            $this->validate([
                    'childCategoryName' => 'required|min:2',
                    'subCategory_id' => 'required'
                    ]);
                ChildCategory::findOrFail($this->subCategory['id'])
                ->update([
                    'sub_category_id' => $this->subCategory_id,
                    'child_category_name' => $this->childCategoryName,
                    'slug'=> Str::slug($this->childCategoryName)
                ]);
        }
       
        $this->dispatchBrowserEvent('closeModal');
        $this->reset();
        $this->success_message = 'ChildCategory Edited successfully!';
    }

    public function render()
    {
        $subCategories = SubCategory::all();
        $childCategories = ChildCategory::with('subcategory')->get();
        return view('livewire.backend.child-categories.manage-child-categories',
        [
            'childCategories' => $childCategories,
            'subCategories'   => $subCategories,
        ]
    );
    }
}
