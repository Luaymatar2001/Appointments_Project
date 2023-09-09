<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;

class MainServices extends Model
{
    use HasFactory;
        protected $table = 'main_services';
        protected $fillable = [
            'name',
            'description',
            'time_of_services',
        ];
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
