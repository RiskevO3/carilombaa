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
        $this->lomba_features = Lomba::take(4)->get();
    }

    public function render()
    {
        return view('livewire.home')->extends('layouts.app');
    }
}
