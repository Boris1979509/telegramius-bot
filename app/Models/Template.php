<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $casts = [
        'template' => 'array',
    ];

    function shop()
    {
        return $this->belongsTo(TeleShop::class, 'tele_shop_id', 'id');
    }
}
