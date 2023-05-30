<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopSetting extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'showHome' => 'boolean',
        'showFavorites' => 'boolean'
    ];

    // function teleShop()
    // {
    //     return $this->belongsTo(TeleShop::class, 'tele_shop_id', 'id');
    // }
}
