<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Tag extends Model
{
    use HasFactory ,  HasSlug;
    protected $fillable = [
        'tag_name',
    ];
    public function getRouteKeyName()
    {
        return 'slug';
    }

    //sluggable
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(['tag_name'])
            ->saveSlugsTo('slug')
            ->slugsShouldBeNoLongerThan(35);
    }

}
