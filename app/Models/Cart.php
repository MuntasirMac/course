<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function order() {
        return $this->hasMany(Order::class);
    }
    
}
