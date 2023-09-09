<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Institution extends Model
{
    use HasFactory , HasSlug;

    protected $table = 'institutions';
    protected $fillable = [
        'name',
        'location_id',
        'phone_number',
        'email',
        'password',
        'category_id',
    ];
    public function location()
    {
        return $this->belongsTo(Location::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getCityNameAttribute()
    {
        return $this->location->city->name;
    }
    public function getLocationNameAttribute()
    {
        return $this->location->name;
    }
    public function getCategoryNameAttribute()
    {
        return $this->category->name;
    }


    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(['name','phone_number'])
            ->saveSlugsTo('slug')
            ->slugsShouldBeNoLongerThan(35);
    }





}
