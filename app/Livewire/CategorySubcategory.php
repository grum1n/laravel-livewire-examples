<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\Subcategory;
use Livewire\Component;
use Livewire\Attributes\Rule;

class CategorySubcategory extends Component
{

    public $categories;
 
    #[Rule('required|min:3')]
    public $name;
 
    #[Rule('required')]
    public $category;
 
    #[Rule('required')]
    public $subcategory;
 
    public $subcategories = [];
 
    public function mount()
    {
        $this->categories = Category::all();
        $this->subcategories = collect();
    }
 
    public function updatedCategory($value)
    {
        $this->subcategories = Subcategory::where('category_id', $value)->get();
    }

    public function storeProduct()
    {
        $this->validate([
            'name' => 'required',
            'subcategory' => 'required',
        ]);
 
        Product::create([
            'name' => $this->name,
            'subcategory_id' => $this->subcategory,
        ]);
 
        session()->flash('success', 'Product created successfully.');
        $this->reset('name', 'subcategory', 'category');
    }

    // public function render()
    // {
    //     return view('livewire.category-subcategory');
    // }

    public function render()
    {
        return view('livewire.category-subcategory',[
            'products' => Product::with('subcategory.category')->latest()->paginate(5)
        ]);
    }
}
