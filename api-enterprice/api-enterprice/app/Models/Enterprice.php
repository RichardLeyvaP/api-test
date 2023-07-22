<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enterprice extends Model
{
    use HasFactory;
    public function warehouse()
    {
        return $this->hasOne(Warehouse::class);
    }

}
