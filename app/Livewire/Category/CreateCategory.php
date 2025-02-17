<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Livewire\Component;

class CreateCategory extends Component
{
    public $name, $cat_description, $cat_slug, $status;
    public function render()
    {
        return view('livewire.category.create-category');
    }
    public function save(){
        $this->validate([
            'name' => 'required',
            'cat_slug' => 'nullable',
            'cat_description' => 'required',
           
            
        ]);
        $category = new Category();
        $category->name = $this->name;
        $category->cat_slug = $this->cat_slug;
        $category->cat_description = $this->cat_description;
        $category->save();
        session()->flash('message', 'Category created successfully');
        $this->reset();
    }
}
