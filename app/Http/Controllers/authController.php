<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class authController extends Controller
{

    public function createAccount($data){
        if(!array_key_exists('image',$data)){
            $data['image'] = 'users/t2iz1ulsyrotuqwdgqjb.png';
        }
        $user = User::create([
            'name' => $data['nama'],
            'email' => $data['email'],
            'role' => 'mahasiswa',
            'image'=>$data['image'],
            'password' => Hash::make(Str::random(24))
        ]);
        if(!$user){
            return false;
        }
        $mahasiswa = $user->mahasiswa()->create([
            'user_id'=>$user->id,
            'jenis_kelamin'=>$data['jenisKelamin'],
            'headline'=>'',
            'universitas'=>$data['universitas'],
            'nim'=>$data['nim'],
            'semester'=>$data['semester'],
        ]);
        if(!$mahasiswa){
            $user->delete();
            return false;
        }
        event(new Registered($user));
        Auth::login($user,true);
        return true;
    }
    public function googleLogin(){
        return Socialite::driver('google')->redirect();
    }
    public function googleAuthCallback(){
        $user = Socialite::driver('google')->user();
        $email = $user->email;
        $userExist = User::where('email',$email)->first();
        if($userExist){
            Auth::login($userExist,true);
            session()->flash('success', 'Login berhasil!, Selamat Datang '.Auth::user()->name.'!');
            return redirect()->intended(route('home'));
        }
        $name = $user->name;
        $diktiVerification = $this->getDiktiVerification($name,$email);
        $mahasiswa = $diktiVerification;
        if(!$mahasiswa){
            session()->flash('error', 'Reg gagal!, Anda tidak terdaftar di dikti!');
            return redirect()->route('register');
        }
        $googleImage = [
            'image'=>$this->downloadImageGoogle($user->avatar),
        ];
        $mahasiswa = array_merge($mahasiswa,$googleImage);
        $createMahasiswa = $this->createAccount($mahasiswa);
        if(!$createMahasiswa){
            session()->flash('error', 'Reg gagal!, Email sudah terdaftar atau terjadi kesalahan');
            return redirect()->route('register');
        }
        session()->flash('success', 'Registrasi berhasil!, Selamat datang '.Auth::user()->name);
        return redirect()->intended(route('home'));        
    }
    public function microsoftLogin(){
        return Socialite::driver('microsoft')->redirect();
    }
    public function microsoftAuthCallback(){
        $user = Socialite::driver('microsoft')->user();
        $email = $user->email;
        $userExist = User::where('email',$email)->first();
        if($userExist){
            Auth::login($userExist,true);
            session()->flash('success', 'Login berhasil!, Selamat Datang '.Auth::user()->name.'!');
            return redirect()->intended(route('home'));
        }
        $name = $user->name;
        $diktiVerification = $this->getDiktiVerification($name,$email);
        $mahasiswa = $diktiVerification;
        if(!$mahasiswa){
            session()->flash('error', 'Reg gagal!, Anda tidak terdaftar di dikti!');
            return redirect()->route('register');
        }
        $createMahasiswa = $this->createAccount($mahasiswa);
        if(!$createMahasiswa){
            session()->flash('error', 'Reg gagal!, Email sudah terdaftar atau terjadi kesalahan');
            return redirect()->route('register');
        }
        session()->flash('success', 'Registrasi berhasil!, Selamat datang '.Auth::user()->name);
        return redirect()->intended(route('home'));
        
    }
    public function downloadImageGoogle($url){
        try{
            $client = new Client();
            $response = $client->request('GET',$url);
            $image = $response->getBody()->getContents();
            $image = base64_encode($image);
            return $image;
        }
        catch(ClientException $e){
            return false;
        }catch(ConnectException $e){
            return false;
        }
    }
    public function isNameSame($nameDikti,$nameUser){
        $nameDikti = strtolower($nameDikti);
        $nameUser = strtolower($nameUser);
        return $nameDikti == $nameUser;
    }
    public function getSearchDikti($data,$name){
        $dataResult = [];
        foreach($data as $d){
            $textData = $d->text;
            $splitData = explode(',', $textData);
            $namaNim = explode('(', $splitData[0]);
            $nama = $namaNim[0];
            $nim = explode(')', $namaNim[1])[0];
            $universitas = explode(':', $splitData[1])[1];
            $prodi = explode(':', $splitData[2])[1];
            $namaTrim = strtolower(trim($nama));
            $nimTrim = trim($nim);
            $universitasTrim = strtolower(trim($universitas));
            $prodiTrim = strtolower(trim($prodi));
            $websiteLinkSplit = explode('/',$d->{'website-link'});
            $mahasiswadetail = $websiteLinkSplit[count($websiteLinkSplit)-1];
            $dataResult[] = [
                'nama' => ucwords($namaTrim),
                'nim' => $nimTrim,
                'universitas' => ucwords($universitasTrim),
                'prodi' => ucwords($prodiTrim),
                'mahasiswaDetail'=>$mahasiswadetail,
            ];
        }
        return array_filter($dataResult,function($data) use ($name){
            return $this->isNameSame($data['nama'],$name);
        });
    }
    public function getDescribeUniv($data){
        $namaUniv = $data->nm_lemb;
        $fullEmail = $data->email;
        $emailDomain = explode('@', $fullEmail)[1];
        return [
            'universitas' => $namaUniv,
            'emailDomain' => $emailDomain
        ];
    }
    public function getUnivData($token){
        try{
            $client = new Client();
            $response = $client->request('GET','https://api-frontend.kemdikbud.go.id/v2/detail_pt/'.$token);
            $data = json_decode($response->getBody()->getContents());
            return $data;

        }catch(ClientException $e){
            return false;

        }
        catch(ConnectException $e){
            return false;
        }
    }
    public function getDescribeMahasiswa($data){
        $dataUmum = $data->dataumum;
        $semester = count($data->datastatuskuliah);
        $programStudi = $dataUmum->namajenjang.' '.$dataUmum->namaprodi;
        $jenisKelamin = $dataUmum->jk;
        $namaPtSplit = explode('/',$dataUmum->link_pt);
        $tokenPt = $namaPtSplit[count($namaPtSplit)-1];
        $univRequest = $this->getUnivData($tokenPt);
        $univDomain = $this->getDescribeUniv($univRequest);
        $responseData = [
            'semester'=>$semester,
            'programStudi'=>$programStudi,
            'jenisKelamin'=>$jenisKelamin,
        ];
        return array_merge($responseData,$univDomain);
    }
    public function getMahasiswaData($token){
        try{
            $client = new Client();
            $response = $client->request('GET','https://api-frontend.kemdikbud.go.id/detail_mhs/'.$token);
            $data = json_decode($response->getBody()->getContents());
            return $data;
        }
        catch(ClientException $e){
            return false;
        }catch(ConnectException $e){
            return false;
        }
    }
    public function searchMahasiswa($data,$email){
        $emailDomain = explode('@', $email)[1];
        foreach($data as $d){
            $getMahasiswa = $this->getMahasiswaData($d['mahasiswaDetail']);
            if(!$getMahasiswa){
                continue;
            }
            $mahasiswa = $this->getDescribeMahasiswa($getMahasiswa);
            $isEmailValid = str_contains($emailDomain,$mahasiswa['emailDomain']);
            if($isEmailValid){
                return array_merge($d,$mahasiswa);
            }
        }
        return false;
    }
    public function getDiktiVerification($name,$email){
        try{
            $client = new Client();
            $response = $client->request('GET','https://api-frontend.kemdikbud.go.id/hit_mhs/'.$name);
            $data = json_decode($response->getBody()->getContents());
            $mahasiswa = $data->mahasiswa;
            $searchResponse = $this->getSearchDikti($mahasiswa,$name);
            if(count($searchResponse) == 0){
                return false;
            }
            $mahasiswaData = $this->searchMahasiswa($searchResponse,$email);
            if(!$mahasiswaData){
                return false;
            }
            $emailArray = [
                'email' => $email,
            ];
            $mahasiswaData = array_merge($mahasiswaData,$emailArray);
            return $mahasiswaData;
        }
        catch(ClientException $e){
            return false;
        }catch(ConnectException $e){
            return false;
        }
    }
}
