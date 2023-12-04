<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
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
        'image_url',
        'is_verified',
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
        $image_extension = explode('.', $this->image_url);
        $ext = end($image_extension);
        return env('CLOUDINARY_URL') .$this->image_url.'.'.$ext;
    }

    public function resizeImage($width, $height){
        $image_extension = explode('.', $this->image_url);
        $ext = end($image_extension);
        return env('CLOUDINARY_URL') .$this->image_url.'.'.$ext."?w=$width&h=$height&c=fill";
    }

    public static function boot(){
        parent::boot();
        static::deleting(function($model){
            // delete data image from cloudinary
            Storage::disk('cloudinary')->delete($model->image_url);
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

    public function lomba(): HasMany
    {
        return $this->hasMany(Lomba::class);
    }

    public function pendaftar(): BelongsToMany
    {
        return $this->belongsToMany(Pendaftar::class);
    }

    public function transaction(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }
}
