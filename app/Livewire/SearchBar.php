<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class SearchBar extends Component
{
    public $search = "";

    public function render()
    {
        $results = [];

        if(strlen($this->search) >= 1){
            $results = User::where('name', 'like', '%' . $this->search . '%')->limit(7)->get();
        }
        
        return view('livewire.search-bar', [
            'users' => $results
        ]);
    }
}
