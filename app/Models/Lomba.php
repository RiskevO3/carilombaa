<?php

namespace App\Models;

use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Lomba extends Model
{
    use HasFactory;
    use HasUuids;
    protected $fillable = [
        'user_id',
        'image_url',
        'title',
        'short_description',
        'description',
        'minimum_person',
        'maximum_person',
        'start_date',
        'end_date',
        'registration_start_date',
        'registration_end_date',
        'registration_fee',
        'is_approved',
        'is_active',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'registration_start_date' => 'datetime',
        'registration_end_date' => 'datetime',
    ];


    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->user_id = auth()->user()->id;
            $model->is_approved = false;
            $model->is_active = true;
        });
    }

    public function getImage(){
        $image_extension = explode('.', $this->image_url);
        $ext = end($image_extension);
        return env('CLOUDINARY_URL') .$this->image_url.'.'.$ext;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function pendaftars(): HasMany
    {
        return $this->hasMany(Pendaftar::class);
    }
}
