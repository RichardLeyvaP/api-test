<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pedido extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $timestamps = false;
    protected $fillable = [
        'tiempo'
    ];

//definoiendo relacion 1Mesa:mPedidos
public function mesas():BelongsTo
{
    
    return $this->belongsTo(Mesa::class,'mesa_id');
}    
}
