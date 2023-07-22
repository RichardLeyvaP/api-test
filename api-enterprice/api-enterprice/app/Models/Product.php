<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //Relacion 1:m (Inversa)
    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
    }
}
