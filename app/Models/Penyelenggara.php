<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Penyelenggara extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'penyelenggara';
    protected $fillable = [
        'user_id',
        'nama_instansi',
        'is_verified'
    ];

    protected $keyType = 'string';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function lomba():HasMany
    {
        return $this->hasMany(Lomba::class);
    }

}
