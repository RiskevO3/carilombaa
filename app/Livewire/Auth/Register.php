<?php

namespace App\Livewire\Auth;

use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Register extends Component
{
    use WithFileUploads;

    /** @var string */
    public $name = '';

    /** @var string */
    public $email = '';

    /** @var string */
    public $phone = '';

    /** @var string */
    public $instansi = '';
    
    /** @var string */
    public $password = '';
    
    /** @var string */
    public $passwordConfirmation = '';

    /** @var bool */
    public $loading = false;

    public $image;

    #[Url]
    public $as = '';

    public $validation_array = [
        'name' => ['required'],
        'email' => ['required', 'email', 'unique:users'],
        'password' => ['required', 'min:8', 'same:passwordConfirmation'],
        'phone' => ['required'],
        'instansi' => ['required'],
        'image' => ['required', 'image', 'max:1024'],
    ];

// custom function
    protected function array_except($array, $keys){
        foreach($keys as $key){
            unset($array[$key]);
        }
        return $array;
      }

// end custom function


    public function mount(){
        if(!Auth::guest() || !in_array($this->as, ['penyelenggara', 'mahasiswa',''])){
            return redirect()->route('home');
        }
        if ($this->as === 'mahasiswa') $this->validation_array = $this->array_except($this->validation_array, ['instansi']);
    }

    public function register()
    {
        $this->validate($this->validation_array);
        $image_upload = Storage::disk('cloudinary')->put('users', $this->image);
        if(!$image_upload){
            // add error later
            $this->addError('image', 'Upload gambar gagal');
            return;
        }
        $user = User::create([
            'email' => $this->email,
            'name' => $this->name,
            'phone'=> $this->phone,
            'image'=> $image_upload,
            'role'=> $this->as,
            'password' => Hash::make($this->password),
        ]);
        if(!$user){
            // add error later
            session()->flash('error', 'Registrasi gagal!');
            return redirect()->intended(route('home'));
        }
        if($this->as=='penyelenggara'){
            $user_role = $user->penyelenggara()->create([
                'nama_instansi' => $this->instansi,
            ]);
        }
        if(!$user_role){
            $user->delete();
            // add error later
            session()->flash('error', 'Registrasi gagal!');
            return redirect()->intended(route('home'));
        }
        event(new Registered($user));
        Auth::login($user, true);
        session()->flash('success', 'Registrasi berhasil!, Selamat datang '.Auth::user()->name);
        return redirect()->intended(route('home'));
    }

    public function render()
    {
        return view('livewire.auth.register')->extends('layouts.auth');
    }
}
