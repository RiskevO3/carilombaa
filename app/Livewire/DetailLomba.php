<?php

namespace App\Livewire;

use App\Models\Lomba;
use Livewire\Component;

class DetailLomba extends Component
{
    public $lomba;
    public $other_lomba;
    public function mount($slug){
        $lomba = Lomba::where('slug', $slug)->with('category','penyelenggara')->first();
        if($lomba && $lomba->status == Lomba::STATUS_APPROVED){
            $this->lomba = $lomba;
            // get 4 other lomba except this lomba
            $other_lomba = Lomba::select('image','title','start_date','end_date','short_description','id','category_id','slug','location','location_detail')->where('id', '!=', $lomba->id)->with('category')->take(4)->get();
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
