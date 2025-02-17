<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\On;
use Livewire\WithFileUploads;

class ManageCategory extends Component
{
    use WithFileUploads;
    public $name, $cat_description, $cat_slug, $status,$image;
    public $categories;
    public function render()
    {
        $categories = Category::all();
        return view('livewire.category.manage-category',['categories' => $categories,]);
    }
    public function UpdatedName(){
        $this->cat_slug = Str::slug($this->name);
    }
    #[On('refresh-category')]
    public function mount(){
        $this->categories=Category::get();
    }
    public function save()
    {
        $this->validate([
            'name' => 'required',
            'cat_description' => 'required',
           
        ]);
        $category = new Category();
        $category->name = $this->name;
        $category->cat_slug =$this->cat_slug;
        $category->cat_description = $this->cat_description;
       
        $category->save();
        session()->flash('message', 'Category created successfully');
        $this->dispatch('close-modal');
        $this->dispatch('refresh-category');
         return $this->redirect('/manage-category', navigate: true);
        // return redirect()->route('category.manage-category');
       
    }
}
