<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BazarImage extends Model
{
    public $table = 'Bazarimages';
    use HasFactory;
    protected $guarded = [];

    public function bazar()
    {
        return $this->belongsTo(Bazar::class, 'bazar_id');
    }

}
