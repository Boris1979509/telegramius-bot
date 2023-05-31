<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Schema;

class Category extends Model
{
    protected $casts = [
        'is_visible_name' => 'boolean'
    ];

    // public function products() {
    //     return $this->hasMany(Product::class);
    // }

    // function teleShop()
    // {
    //     return $this->belongsTo(TeleShop::class, 'tele_shop_id', 'id');
    // }

    public function getImageAttribute($value)
    {
        if ($value)
            return env('VITE_API_DOMAIN') . '/storage/catalog/category/thumb/' . $value;
        else
            return null;
    }

    // public function products()
    // {
    //     return $this->belongsToMany(Product::class, 'category_product');
    // }

    // public function categories()
    // {
    //     return $this->hasMany(Category::class, 'parent_id', 'id');
    // }

    // public function childrenCategories()
    // {
    //     return $this->hasMany(Category::class, 'parent_id', 'id')->with('categories');
    // }

    // public function banner(): \Illuminate\Database\Eloquent\Relations\HasOne
    // {
    //     return $this->hasOne(CategoryBanner::class);
    // }
    /**
     * Проверяет, существует ли указанное поле в таблице
     */
    public static function hasColumn($fieldName)
    {
        $tableName = with(new static)->getTable();

        return Schema::hasColumn($tableName, $fieldName);
    }
}
