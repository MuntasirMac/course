<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizzes extends Model
{
    use HasFactory;
    public function register_info() {
        return $this->belongsTo(RegisterInfo::class);
    }

    public function modules() {
        return $this->hasMany(Modules::class);
    }
}
