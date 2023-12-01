<?php

namespace App\Livewire;

use App\Models\Lomba;
use Livewire\Component;

class DetailLomba extends Component
{
    // public $lomba;
    // public function mount($uuid){
    //     $lomba = Lomba::where('uuid', $uuid)->first();
    //     if($lomba){
    //         $this->lomba = $lomba;
    //         return;
    //     }
    //     session()->flash('error', 'Lomba tidak ditemukan');
    //     return redirect()->route('home');
    // }

    public function render()
    {
        return view('livewire.detail-lomba')->extends('layouts.app');
    }
}
