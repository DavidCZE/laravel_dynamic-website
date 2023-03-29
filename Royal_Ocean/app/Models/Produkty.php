<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produkty extends Model{
    public $table = 'produkty';
    use HasFactory;

    protected $fillable = ['nazev', 'rok_vyroby', 'uvod', 'popisek', 'cena', 'uvodni_fotka',];

    public function pimages(){
        return $this->hasMany(Pimage::class);
    }
}
