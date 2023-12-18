<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProfileDetail extends Component
{
    public $user;

    public function mount(){
        $this->user = Auth::user()->load('mahasiswa');
    }
    public function render()
    {
        return view('livewire.profile-detail')->extends('layouts.app');
    }
}
