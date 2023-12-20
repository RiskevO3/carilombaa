<?php

namespace App\Livewire;

use App\Models\Lomba;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FormPendaftaranLomba extends Component
{
    public $lomba;

    public function mount($slug)
    {
        $lombaQuery = Lomba::where('slug', $slug)->first();
        if ($lombaQuery && $lombaQuery->status == Lomba::STATUS_APPROVED) {
            $this->lomba = $lombaQuery;
            return;
        }
        session()->flash('error', 'Lomba tidak ditemukan');
        return redirect()->route('home');
    }

    public function getLomba(){
        return $this->lomba;
    }

    public function render()
    {
        return view('livewire.form-pendaftaran-lomba')->extends('layouts.app');
    }
}
