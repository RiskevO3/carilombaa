<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Mahasiswa extends Model
{
    use HasFactory;
    use HasUuids;
    protected $table = 'mahasiswa';
    protected $fillable = [
        'user_id',
        'jenis_kelamin',
        'headline',
        'universitas',
        'nim',
        'semester'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function pendaftar(): BelongsToMany
    {
        return $this->belongsToMany(Pendaftar::class,'mahasiswa_pendaftar');
    }
    
}
