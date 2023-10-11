<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class NewForm extends Component
{
    public $name = 'secret name';
 
    public $email = 'secret email';

    public $password = '';

    public function addNewUser()
    {
      

        User::create(
          ['name' => $this->name,
            'email' => $this->email,
            'password' => $this->password]
        );

        // return with('status', 'Post successfully created.');
        // User::create([
        //     'name' => $this->name,
        //     'email' => $this->email,
        //     'password' => $this->password
        // ]);
    }

    public function render()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('livewire.new-form', compact('users'));
    }
}
