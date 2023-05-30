<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    //use HasFactory;

    // protected $guarded = [];
    // protected $casts = [
    //     'is_published' => 'boolean',
    //     'is_visible_name' => 'boolean'
    // ];

    // public function products() {
    //     return $this->hasMany(Product::class);
    // }

    // function teleShop()
    // {
    //     return $this->belongsTo(TeleShop::class, 'tele_shop_id', 'id');
    // }

    // public function getPathImageAttribute()
    // {
    //     if ($this->image)
    //         return url(Storage::url('catalog/category/thumb/' . $this->image));
    //     else
    //         return null;
    // }

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
}
