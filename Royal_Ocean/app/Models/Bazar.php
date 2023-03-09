<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bazar extends Model{
    public $table = 'bazar';
    use HasFactory;

    protected $fillable = ['nazev', 'user_id', 'znacka', 'rok_vyroby', 'uvod', 'popisek', 'email', 'cislo', 'lokace', 'uvodni_fotka', 'images'];

    public function scopeFilter($query, array $filters) {
       
        if($filters['search'] ?? false) {
            $query->where('nazev', 'like', '%' .request('search') . '%')
                ->orWhere('rok_vyroby', 'like', '%' .request('search') . '%')
                ->orWhere('uvod', 'like', '%' .request('search') . '%')
                ->orWhere('popisek', 'like', '%' .request('search') . '%')
                ->orWhere('lokace', 'like', '%' .request('search') . '%');
        }

    }

    //Relationship to user
    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
    //Relationship with BazarImage
    public function images()
    {
        return $this->hasMany('App\Models\BazarImage', 'bazar_id');
    }

}
