<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Location extends Model
{
    use HasFactory , HasSlug;

    protected $table = 'locations';
    protected $fillable = [
        'name',
        'city_id',
        'location_code',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
    
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(['name','location_code'])
            ->saveSlugsTo('slug')
            ->slugsShouldBeNoLongerThan(35);
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getCityNameAttribute()
    {
        return $this->city->name;
    }

    

}
