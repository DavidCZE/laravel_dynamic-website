<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produkty extends Model{
    public $table = 'produkty';
    use HasFactory;

    protected $fillable = ['pnazev', 'prok_vyroby', 'puvod', 'ppopisek', 'puvodni_fotka'];
}
