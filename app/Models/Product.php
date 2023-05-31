<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Schema;

class Product extends Model
{
    protected $casts = [
        'is_published' => 'boolean',
        'isDiscount' => 'boolean',
        'price' => 'float'
    ];
    protected $appends = ['new_price'];

    function teleShop()
    {
        return $this->belongsTo(TeleShop::class, 'tele_shop_id', 'id');
    }

    // public function getPathImageAttribute()
    // {
    //     if ($this->image)
    //         return url(Storage::url('catalog/product/thumb/' . $this->image));
    //     elseif ($this->images()->first())
    //         return $this->images()->first()->url;
    //     else
    //         return env('APP_URL') . '/adminka/images/icons/no-image.svg';
    // }

    function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product')->withPivot(['qty', 'price']);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }

    function images()
    {
        return $this->hasMany(File::class, 'product_id', 'id');
    }

    public function children()
    {
        return $this->hasMany(Product::class, 'related_id', 'id');
    }

    public function parent()
    {
        return $this->hasOne(Product::class, 'id', 'related_id');
    }

    public function getNewPrice()
    {
        if ($this->discount_value && $this->discount_type && $this->isDiscount) {
            $price = $this->attributes['price']; // Получаем оригинальное значение атрибута price
            if ($this->discount_type !== '%') {
                return $price - $this->discount_value;
            } else {
                return $price - round($price / 100 * $this->discount_value, 2);
            }
        } else {
            return null;
        }
    }

    public function relatedChildren()
    {
        return collect($this->children->all())->each(function ($item) {
            $item->locale = $item->getLocale();
            return $item->images;
        });
    }

    public function getLocale()
    {
        return Currency::where('iso_4217_3', $this->currency)->first()
            ->default_locale;
    }

    public function getPriceAttribute($value)
    {
        return  $this->formattedPrice($value);
    }

    public function getNewPriceAttribute()
    {
        if (!is_null($new_price = $this->getNewPrice()))
            return $this->formattedPrice($new_price);
    }

    private function formattedPrice($number)
    {
        $formatter = new \NumberFormatter($this->getLocale(), \NumberFormatter::CURRENCY);
        $formattedCurrency = $formatter->formatCurrency($number, $this->currency);
        return  $formattedCurrency;
    }

    /**
     * Проверяет, существует ли указанное поле в таблице
     */
    public static function hasColumn($fieldName)
    {
        $tableName = with(new static)->getTable();

        return Schema::hasColumn($tableName, $fieldName);
    }
}
