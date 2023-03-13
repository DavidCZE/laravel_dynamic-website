<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $table = 'blog';
    use HasFactory;
    protected $fillable = ['nazev', 'obsah'];

    public function scopeFilter($query, array $filters) {
       
        if($filters['search'] ?? false) {
            $query->where('nazev', 'like', '%' .request('search') . '%')
                ->orWhere('obsah', 'like', '%' .request('search') . '%');
        }

    }
}
