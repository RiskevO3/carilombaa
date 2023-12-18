<?php

namespace App\Livewire;

use App\Models\Lomba;
use Carbon\Carbon;
use Livewire\Component;

class Home extends Component
{

    public $lomba_features;

    public function mount(){
        // get 3 data from lomba
        $lomba_res = Lomba::take(3)->with('category')->get();
        $this->lomba_features = $lomba_res->count() > 0 ? $lomba_res : false;
    }

    public function render()
    {
        return view('livewire.home')->extends('layouts.app');
    }
}
