<?php

namespace App\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ManageCategory extends Component
{
    use WithFileUploads;
    public $searchTerm = '';
    public $categoryId;
    public $name;
    public $slug;
    public $description;
    public $image;
    public $existingImage;
    public $isModalOpen = false;
    public $confirmingDelete = false;


    protected $rules = [
        'name' => 'required|string|max:255',
        'slug' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|max:2048',
    ];
    public function render()
    {
        $categories = Category::where('name', 'like', '%' . $this->searchTerm . '%')
            ->orWhere('cat_description', 'like', '%' . $this->searchTerm . '%')
            ->get();
        return view('livewire.admin.category.manage-category', [
            'categories' => $categories,
        ]);
    }
    

    public function openModal($categoryId)
    {
        $this->categoryId = $categoryId;
        $category = Category::find($this->categoryId);
        $this->name = $category->name;
        $this->slug = $category->cat_slug;
        $this->description = $category->cat_description;
        $this->existingImage = $category->image;
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
        $this->reset(['image', 'existingImage']);
    }
    public function updatedName($value)
    {
        $this->slug = Str::slug($value);
    }

    public function updateCategory()
    {
        $this->validate();

        $category = Category::find($this->categoryId);
        $category->name = $this->name;
        $category->cat_slug = $this->slug;
        $category->cat_description = $this->description;

        if ($this->image) {
            // Delete old image
            if ($this->existingImage) {
                Storage::delete('public/image/category/' . $this->existingImage);
            }

            // Store new image
            $imagePath = $this->image->store('image/category', 'public');
            $category->image = basename($imagePath);
        }

        $category->save();

        $this->closeModal();

        session()->flash('message', 'Category updated successfully.');
    }

    public function delete(Category $category)
    {
        
       if($category->children()->exists()){
           return redirect()->back()->with('error', 'Category has subcategories. Please delete them first.');
        } 
        $category->delete();
        return redirect()->back()->with('message', 'Category deleted successfully.');
    }


   
}

