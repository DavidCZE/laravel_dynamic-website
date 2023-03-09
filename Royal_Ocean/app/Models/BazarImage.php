<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BazarImage extends Model
{
    use HasFactory;

    protected $table = 'bazarimages';
    protected $fillable = [
        'url', 'bazar_id'
    ];

    //Relationship with Bazar Model
    public function bazar()
    {
        return $this->belongsTo('App\Models\Bazar', 'bazar_id');
    }

}
