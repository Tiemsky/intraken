<?php

namespace App\Http\Livewire\Backend\Categories;

use App\Models\Category;
use Exception;
use Livewire\WithPagination;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;

class ManageCategories extends Component
{
    use WithPagination;
    use WithFileUploads;
   
    public $success_message;
    public $category;
    public $category_id;
    public $current_image;
    public $new_image;
    public $categoryName;
    public $class;
  

   
    public function editCategory($id)
    {
    
        // $this->dispatchBrowserEvent('show-modal');
        $category = Category::findOrFail($id);
        $this->category_id = $category->id;
        $this->categoryName = $category->category_name;
        $this->class = $category->class;
    }

    public function update()
    {
      
            $this->validate([
                'categoryName' =>'required|string|min:2',
                'class' => 'required|string'
                ]);
            $this->updateCategory();
            $this->dispatchBrowserEvent('closeModal');
            $this->reset();
            $this->success_message = 'Category Edited successfully!';
        
        
    }


    //deleting categories along with images
    public function deleteCategory($id)
    {

        Category::findOrFail($id)->delete();
        $this->success_message = 'Category deleted successfully!';

    }

    //updating and storing categories 
    public function updateCategory()
    {
            Category::findOrFail($this->category_id)->update([
            'category_name' => $this->categoryName,
            'slug' => Str::slug($this->categoryName),
            'class' => $this->class,

        ]);
    }
    
    public function render()
    {
        $this->categories = Category::Paginate(5);
        return view('livewire.backend.categories.manage-categories',

        ['categories' => $this->categories],
       
    
    );
    }
}
