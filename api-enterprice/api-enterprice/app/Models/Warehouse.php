<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;
    //Relacion 1:1 (inversa)
    public function enterprice()
    {
        return $this->belongsTo(Enterprice::class);
    }
    
    //Relacion 1:m
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
