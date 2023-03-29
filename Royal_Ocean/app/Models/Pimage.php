<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pimage extends Model
{
    use HasFactory;
    protected $fillable=[
        'pimage',
        'produkty_id',
    ];

    public function produkty(){
        return $this->belongsTo(Produkty::class);
    }
}
