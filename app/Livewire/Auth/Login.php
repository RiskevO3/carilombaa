<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Url;
use Livewire\Component;

class Login extends Component
{

    #[Url]
    public $as = '';

    public $welcome_message = '';

    protected $rules = [
        'email' => ['required', 'email'],
        'password' => ['required'],
    ];

    public function mount(){
        $this->as = $this->as == '' ? 'default' : $this->as;
        $this->welcome_message = $this->as == 'penyelenggara' ? 'Penyelenggara Lomba!' : 'Mahasiswa Peserta Lomba!';
    }

    public function authenticate($email,$password,$remember)
    {
        if($email == '' || $password == ''){
            return [
                'status'=>false,
                'message'=>'Login gagal!, Email atau password tidak boleh kosong!'
            ];
        }
        if (!Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
            return [
                'status'=>false,
                'message'=>'Login gagal!, Email atau password salah!'
            ];
        }
        session()->flash('success', 'Login berhasil!, Selamat Datang '.Auth::user()->name.'!');
        return redirect('/penyelenggara');
    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.auth');
    }
}
