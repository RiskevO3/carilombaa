<?php

namespace App\Livewire;

use App\Models\Lomba;
use Livewire\Component;

class HomeLogin extends Component
{
    public $list_lomba;

    public $search_lomba = '';

    public function mount(){
        
        $this->list_lomba = Lomba::with('category')->limit(16)->get();
    }

    public function searchLomba(){
        if($this->search_lomba != '' && strlen($this->search_lomba) > 5){
            $lomba_res = Lomba::where('title','like','%'.$this->search_lomba.'%')->limit(16)->get();
            if($lomba_res->count() <= 0){
                $this->dispatch('toast:error',message:'Tidak ada lomba yang ditemukan dengan kata kunci '.$this->search_lomba,overlay:false);
                $this->search_lomba = '';
                return;
            }
            $this->list_lomba = $lomba_res;
            $this->dispatch('toast:success',message:'Menampilkan hasil pencarian dengan kata kunci '.$this->search_lomba,overlay:false);
            $this->search_lomba = '';
            return;
        }
        $this->dispatch('toast:error',message:'Kata kunci pencarian minimal 5 karakter',overlay:false);
        $this->search_lomba = '';  
    }

    public function render()
    {
        return view('livewire.home-login')->extends('layouts.app');
    }
}
