<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PivotInstitutionTags extends Model
{
    use HasFactory ;

        protected $table = 'pivot_institution_tags';
        protected $fillable = [
            'institution_id',
            'tags_id',
        ];
        public function institution()
        {
            return $this->belongsTo(Institution::class);
        }
        public function tags()
        {
            return $this->belongsTo(Tags::class);
        }
        
}
