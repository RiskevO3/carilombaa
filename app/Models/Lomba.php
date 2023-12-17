<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Lomba extends Model
{
    use HasFactory;
    use HasUuids;
    protected $table = 'lomba';
    protected $fillable = [
        'penyelenggara_id',
        'image',
        'title',
        'slug',
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
        // change this to penyelenggara
        static::creating(function ($model) {
            $model->user_id = auth()->user()->id;
            $model->is_approved = false;
            $model->is_active = true;
        });

        static::deleting(function($model){
            // delete data image from cloudinary
            Storage::disk('cloudinary')->delete($model->image);
            $model->category()->detach();
        });
    }

    public function getImage(){
        $image_extension = explode('.', $this->image);
        $ext = end($image_extension);
        return env('CLOUDINARY_URL') .$this->image.'.'.$ext;
    }

    public function penyelenggara()
    {
        return $this->belongsTo(Penyelenggara::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function pendaftar(): HasMany
    {
        return $this->hasMany(Pendaftar::class);
    }
}
