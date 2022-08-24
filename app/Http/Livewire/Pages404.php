<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\URL;

class Pages404 extends Component
{
    public function render()
    {
        return view('livewire.pages404');
    }

    public function previousPage(){
        return URL::previous();
    }

    public function login(){
        $this->modalFormVisible = true;
    }
}
