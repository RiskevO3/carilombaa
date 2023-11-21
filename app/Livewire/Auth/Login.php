<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Url;
use Livewire\Component;

class Login extends Component
{

    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var bool */
    public $remember = false;

    /** @var bool */
    public $loading = false;

    #[Url]
    public $as = '';

    public $welcome_message = '';

    protected $rules = [
        'email' => ['required', 'email'],
        'password' => ['required'],
    ];

    public function mount(){
        if(!Auth::guest() || !in_array($this->as, ['penyelenggara', 'mahasiswa'])){
            return redirect()->route('home');
        }
        $this->welcome_message = $this->as == 'penyelenggara' ? 'Penyelenggara Lomba!' : 'Mahasiswa Peserta Lomba!';
    }

    public function authenticate()
    {
        $this->validate();

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', trans('auth.failed'));

            return;
        }

        return redirect()->intended(route('home'));
    }

    public function render()
    {
        return view('livewire.auth.login')->extends('layouts.auth');
    }
}
