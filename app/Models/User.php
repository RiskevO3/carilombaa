<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable,HasUuids;

    const ROLE_ADMIN = 'admin';
    const ROLE_MAHASISWA = 'mahasiswa';
    const ROLE_PENYELENGGARA = 'penyelenggara';

    const ROLES = [
        self::ROLE_ADMIN => 'Admin',
        self::ROLE_MAHASISWA => 'Mahasiswa',
        self::ROLE_PENYELENGGARA => 'Penyelenggara',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'name',
        'phone',
        'role',
        'image',
        'password',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getImage(){
        $image_extension = explode('.', $this->image);
        $ext = end($image_extension);
        return env('CLOUDINARY_URL') .$this->image.'.'.$ext;
    }

    public function resizeImage($width, $height){
        $image_extension = explode('.', $this->image);
        $ext = end($image_extension);
        return env('CLOUDINARY_RESIZE').',h_'.$height.',w_'.$width.'/v1701024062'.'/'.$this->image.'.'.$ext;
    }

    public static function boot(){
        parent::boot();
        static::deleting(function($model){
            // delete data image from cloudinary
            if($model->image != 'users/t2iz1ulsyrotuqwdgqjb.png'){
                Storage::disk('cloudinary')->delete($model->image);
            }
        });
    }

    public function mahasiswa(): HasOne
    {
        return $this->hasOne(Mahasiswa::class);
    }

    public function penyelenggara(): HasOne
    {
        return $this->hasOne(Penyelenggara::class);
    }

    public function canAccessPanel(Panel $panel): bool
    {
        if($panel->getId() === 'admin'){
            return $this->isAdmin();
        }
        return $this->isPenyelenggara();
    }
    public function isAdmin(): bool
    {
        return $this->role === self::ROLE_ADMIN;
    }
    public function isMahasiswa(): bool
    {
        return $this->role === self::ROLE_MAHASISWA;
    }
    public function isPenyelenggara(): bool
    {
        return $this->role === self::ROLE_PENYELENGGARA;
    }
}
