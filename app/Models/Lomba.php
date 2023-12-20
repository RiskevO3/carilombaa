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

    CONST STATUS_PENDING = 0;
    CONST STATUS_APPROVED = 1;
    CONST STATUS_REJECTED = 2;
    CONST STATUS_DEFAULT = self::STATUS_PENDING;
    CONST STATUS = [
        self::STATUS_PENDING => 'Pending',
        self::STATUS_APPROVED => 'Approved',
        self::STATUS_REJECTED => 'Rejected',
    ];

    CONST LOCATION_ONLINE = 0;
    CONST LOCATION_OFFLINE = 1;
    CONST LOCATION_DEFAULT = self::LOCATION_ONLINE;
    CONST LOCATION = [
        self::LOCATION_ONLINE => 'Online',
        self::LOCATION_OFFLINE => 'Offline',
    ];

    protected $table = 'lomba';
    protected $fillable = [
        'penyelenggara_id',
        'category_id',
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
        'location',
        'location_detail',
        'status',
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
            $model->penyelenggara_id = auth()->user()->penyelenggara->id;
            $model->is_active = true;
        });

        static::deleting(function($model){
            // delete data image from cloudinary
            Storage::disk('cloudinary')->delete($model->image);
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
