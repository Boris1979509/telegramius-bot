<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeleShop extends Model
{

    // function owner()
    // {
    //     return $this->belongsTo(User::class, 'user_id', 'id');
    // }

    // function buyers()
    // {
    //     return $this->belongsToMany(Buyer::class, 'buyer_tele_shop', 'tele_shop_id', 'buyer_id');
    // }

    // function currencies()
    // {
    //     return $this->belongsToMany(Currency::class, 'currency_tele_shop', 'tele_shop_id', 'currency_id');
    // }

    // function notifiBuyer()
    // {
    //     return $this->belongsToMany(Buyer::class, 'buyer_tele_shop', 'tele_shop_id', 'buyer_id')->wherePivot('notifi', 1);
    // }

    // function chatBuyer()
    // {
    //     return $this->belongsToMany(Buyer::class, 'buyer_tele_shop', 'tele_shop_id', 'buyer_id')->wherePivot('chat', 1);
    // }

    // function bot()
    // {
    //     return $this->hasOne(BotToken::class);
    // }

    // function payToken()
    // {
    //     return $this->hasOne(PayToken::class, 'tele_shop_id', 'id');
    // }

    // function botConnection()
    // {
    //     return $this->hasOne(BotConnection::class, 'tele_shop_id', 'id');
    // }

    // function botConnectionNotifi()
    // {
    //     return $this->botConnection()->where('notifi', true)->get();
    // }

    // function botConnectionChat()
    // {
    //     return $this->botConnection()->where('chat', true)->get();
    // }

    // function products()
    // {
    //     return $this->hasMany(Product::class, 'tele_shop_id', 'id');
    // }

    // function mailings()
    // {
    //     return $this->hasMany(Mailing::class, 'tele_shop_id', 'id');
    // }

    // function botButton()
    // {
    //     return $this->hasMany(BotButton::class, 'tele_shop_id', 'id');
    // }

    // function settings()
    // {
    //     return $this->hasOne(ShopSetting::class, 'tele_shop_id', 'id');
    // }

    // function orders()
    // {
    //     return $this->hasMany(Order::class, 'tele_shop_id', 'id');
    // }

    // public function category() {
    //     return $this->hasMany(Category::class, 'tele_shop_id', 'id');
    // }

    // function address()
    // {
    //     return $this->hasMany(Address::class, 'tele_shop_id', 'id');
    // }

    // public function visitors()
    // {
    //     return $this->hasMany(Visitor::class, 'tele_shop_id', 'id');
    // }

    // public function qrs()
    // {
    //     return $this->hasMany(QRCode::class, 'qr_id', 'id');
    // }

    // function botMessage()
    // {
    //     return $this->hasMany(BotMessage::class, 'tele_shop_id', 'id');
    // }

    // function fullAddress()
    // {
    //     $address = $this->address()->first();
    //     return ucfirst($address->city) . ', ' . ucfirst($address->street) . ', ' . $address->house;
    // }
}
