<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Mintor extends Model
{
    use HasFactory , HasSlug;
        protected $table = 'mintors';
        protected $fillable = [
            'name',
            'description',
            'institution_id',
        ];
        public function institution()
        {
            return $this->belongsTo(Institution::class);
        }
        public function getRouteKeyName()
        {
            return 'slug';
        }
        //sluggable
        public function getSlugOptions(): SlugOptions
        {
            return SlugOptions::create()
                ->generateSlugsFrom(['name'])
                ->saveSlugsTo('slug')
                ->slugsShouldBeNoLongerThan(35);
        }

}
