<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public function cart() {
        return $this->hasMany(Cart::class);
    }

    public function reviews() {
        return $this->hasMany(Reviews::class);
    }

    public function reed_daily_sales() {
        return $this->hasMany(ReedDailySales::class);
    }
    
    public function daily_sales() {
        return $this->hasMany(DailySales::class);
    }

    public function listing_daily_sale() {
        return $this->hasMany(ListingDailySale::class);
    }
}
