<?php

namespace App\Livewire;

use App\Models\Lomba;
use Livewire\Component;

class DetailLomba extends Component
{
    public $lomba;
    public $other_lomba;
    public function mount($uuid){
        $lomba = Lomba::where('id', $uuid)->with('category','user')->first();
        if($lomba){
            $this->lomba = $lomba;
            // get 4 other lomba except this lomba
            $other_lomba = Lomba::select('image','title','start_date','end_date','short_description','id')->where('id', '!=', $uuid)->with('category')->take(4)->get();
            $this->other_lomba = $other_lomba;
            return;
        }
        session()->flash('error', 'Lomba tidak ditemukan');
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.detail-lomba')->extends('layouts.app');
    }
}
