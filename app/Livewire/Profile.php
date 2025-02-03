<?php

namespace App\Livewire;

use Livewire\Component;

class Profile extends Component
{
    public function render()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ];
        return view('livewire.profile',['data' => $data]);
    }
}
