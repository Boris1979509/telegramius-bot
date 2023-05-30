<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $casts = [
        'dateStart' => 'datetime:Y-m-d',
        'timeStart' => 'datetime:H:i',
        'dateEnd' => 'datetime:Y-m-d',
        'timeEnd' => 'datetime:H:i',
    ];

    function shop()
    {
        return $this->belongsTo(TeleShop::class, 'tele_shop_id', 'id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'component_product')->withPivot(['position']);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'component_category')->withPivot(['position']);
    }

    public function files()
    {
        return $this->morphMany(File::class, 'file');
    }

    public function getShowAttribute()
    {
        $start = strtotime($this->dateStart);
        $end = strtotime($this->dateEnd);
        if ($this->isDelayed == true) {
            if (time() > $start && time() < $end)
                return true;
            else
                return false;
        } else {
            return true;
        }
    }
}
