<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable=[
        'name',
        'description',
    ];

    public function lomba():BelongsToMany
    {
        return $this->belongsToMany(Lomba::class);
    }

}
