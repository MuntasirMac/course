<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function carts() {
        return $this->hasMany(Cart::class);
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function reed_daily_sales() {
        return $this->hasMany(ReedDailySale::class);
    }
    
    public function daily_sales() {
        return $this->hasMany(DailySale::class);
    }

    public function marketplaces_daily_sales() {
        return $this->hasMany(MarketplaceDailySale::class);
    }
}
