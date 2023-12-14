<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{

    public function getUserImage(){
        return Auth::user()->getImage();
    }
    public function render()
    {
        return view('livewire.profile')->extends('layouts.app');
    }
}
