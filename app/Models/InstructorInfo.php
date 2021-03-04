<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructorInfo extends Model
{
    use HasFactory;

    public function register_info() {
        return $this->belongsTo(RegisterInfo::class);
    }
}
