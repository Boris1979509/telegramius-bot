<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    function shop()
    {
        return $this->belongsTo(TeleShop::class, 'tele_shop_id', 'id');
    }

    // public function files()
    // {
    //     return $this->morphMany(File::class, 'file');
    // }
}
