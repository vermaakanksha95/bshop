<?php

namespace App\Livewire\Admin\Category;
use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\On;

class ManageCategory extends Component
{
    public $name, $cat_description, $cat_slug, $status, $image, $parent_category_id;
    public $categories;
   
    public function UpdatedName()
    {
        $this->cat_slug = Str::slug($this->name);
    }
    #[On('refresh-category')]
    public function mount()
    {
        $this->categories = Category::get();
    }
    public function save()
    {
        $this->validate([
            'name' => 'required',
            'cat_description' => 'required',
        ]);
        $category = new Category();
        $category->parent_category_id = $this->parent_category_id;
        $category->name = $this->name;
        $category->cat_slug = $this->cat_slug;
        $category->cat_description = $this->cat_description;

        $category->save();
        session()->flash('message', 'Category created successfully');
        $this->dispatch('close-modal');
        $this->dispatch('refresh-category');
        return $this->redirect('/admin/manage-category', navigate: true);
        // return redirect()->route('category.manage-category');
    }

    public function delete(Category $category)
    {
        if ($category->subCategory()->exists()) {
            return redirect('/admin/manage-category')->with('error', 'This category has subcategories,Please delete them first.');
        }
        $category->delete();
        return redirect('/admin/manage-category')->with('success', 'Category deleted successfully.');
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'cat_description' => 'required',
        ]);
        $category = new Category();
        $category->parent_category_id = $this->parent_category_id;
        $category->name = $this->name;
        $category->cat_slug = $this->cat_slug;
        $category->cat_description = $this->cat_description;

        $category->save();
        session()->flash('message', 'Category Update Successfully');
        $this->dispatch('close-modal');
        $this->dispatch('refresh-category');
        return $this->redirect('/manage-category', navigate: true);
    }

    public function render()
    {
        $data['categories'] = Category::where('parent_category_id', NULL)->get();
        return view('livewire.admin.category.manage-category',$data);
    }
}
