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

    public function review() {
        return $this->hasMany(Review::class);
    }

    public function reed_daily_sale() {
        return $this->hasMany(ReedDailySale::class);
    }
    
    public function daily_sale() {
        return $this->hasMany(DailySale::class);
    }

    public function web_daily_sale() {
        return $this->hasMany(WebDailySale::class);
    }
}
