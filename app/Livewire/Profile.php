<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public function getUserData(){
        $userData = [];
        $user = Auth::user();
        $userMahasiswa = $user->mahasiswa;
        $userData['name'] = $user->name;
        $userData['email'] = $user->email;
        $userData['image'] = $user->resizeImage(1000,1000);
        $userData['phone'] = $user->phone;
        $userData['headline'] = $userMahasiswa->headline;
        $userData['universitas'] = $userMahasiswa->universitas;
        $userData['nim'] = $userMahasiswa->nim;
        $userData['jenisKelamin'] = $userMahasiswa->jenis_kelamin;
        return $userData;
    }
    public function render()
    {
        return view('livewire.profile')->extends('layouts.app');
    }
}
