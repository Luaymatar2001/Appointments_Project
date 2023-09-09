<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Appointment extends Model
{
    use HasFactory , HasSlug;
    protected $table = 'appointments';

        protected $fillable = [
            'mintor_id',
            'first_time',
            'end_time',
            'dateoftime',
            'longoftime',
        ];
        public function mintor()
        {
            return $this->belongsTo(Mintor::class);
        }
        //sluggable
        public function getSlugOptions(): SlugOptions
        {
            return SlugOptions::create()
                ->generateSlugsFrom(['first_time','end_time','dateoftime'])
                ->saveSlugsTo('slug')
                ->slugsShouldBeNoLongerThan(35);
        }
        public function getRouteKeyName()
        {
            return 'slug';
        }
}
