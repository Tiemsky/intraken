<?php

namespace App\Http\Livewire\Backend\Subcategories;

use App\Models\Category;
use App\Models\SubCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class ManageSubCategories extends Component
{
    public $success_message;
    public $category_id;
    public $subCategoryName;
    public $subCategory=[];

  
    public function editSubCategory($id)
    {
        
        $this->subCategory = SubCategory::findOrFail($id);
        $this->subCategoryName = $this->subCategory['sub_category_name'];
       
    }

    public function update()
    {
        
        if($this->category_id == null)
        {
            $this->validate(['subCategoryName' => 'required|min:2|unique:sub_categories,sub_category_name']);
            SubCategory::findOrFail($this->subCategory['id'])
                        ->update([
                            'sub_category_name' => $this->subCategoryName,
                            'slug'=> Str::slug($this->subCategoryName)
                        ]);
        }else{
            $this->validate([
                    'subCategoryName' => 'required|min:2',
                    'category_id' => 'required'
                    ]);
            SubCategory::findOrFail($this->subCategory['id'])
                ->update([
                    'category_id' => $this->category_id,
                    'sub_category_name' => $this->subCategoryName,
                    'slug'=> Str::slug($this->subCategoryName)
                ]);
        }
       
        $this->dispatchBrowserEvent('closeModal');
        $this->reset();
        $this->success_message = 'SubCategory Edited successfully!';
       
    }

    public function deleteSubCategory($id)
    {
        SubCategory::findOrFail($id)->delete();
        $this->success_message='Sub Category Deleted Successfully';
    }
    public function render()
    {
        $subCategories = SubCategory::with('category')->get();
        $categories = Category::all();
        return view('livewire.backend.subcategories.manage-sub-categories',
        [
            'subCategories' => $subCategories,
            'categories' => $categories
            ]);
    }
}
