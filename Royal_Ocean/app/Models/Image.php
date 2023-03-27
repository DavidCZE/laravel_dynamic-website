<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Bazar;

class Image extends Model
{
    use HasFactory;
    protected $fillable=[
        'image',
        'bazar_id',
    ];

    public function bazar(){
        return $this->belongsTo(Bazar::class);
    }
}
