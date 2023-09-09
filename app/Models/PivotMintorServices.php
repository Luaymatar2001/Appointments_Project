<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PivotMintorServices extends Model
{
    use HasFactory ;
    protected $table = 'pivot_mintor_services';

    protected $fillable = [
        'mintor_id',
        'main_service_id',
    ];
    public function mintor()
    {
        return $this->belongsTo(Mintor::class);
    }
    public function mainServices()
    {
        return $this->belongsTo(MainServices::class);
    }   

}
