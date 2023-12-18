<?php

namespace App\Livewire;

use App\Models\Lomba;
use Livewire\Component;

class FormPendaftaranLomba extends Component
{
    public $namaLomba;

    public function mount($uuid)
    {
        $lomba = Lomba::where('id', $uuid)->first();
        if ($lomba) {
            $this->namaLomba = $lomba->title;
            return;
        }
        session()->flash('error', 'Lomba tidak ditemukan');
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.form-pendaftaran-lomba')->extends('layouts.app');
    }
}
