<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\SlugOptions;

class SubServices extends Model
{
    use HasFactory;
    protected $table = 'sub_services';

        protected $fillable = [
            'name',
            'mainservices_id',
            'mintor_id',
            'total_time',
        ];
        public function mainServices()
        {
            return $this->belongsTo(MainServices::class);
        }
        public function mintor()
        {
            return $this->belongsTo(Mintor::class);
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
