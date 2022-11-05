<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable =[
        'name',
        'location',
        'rating',
    ];

    /**
     * Get all of the rooms for the Hotel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
