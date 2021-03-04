<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class certificateType extends Model
{
    use HasFactory;
    public function certification() {
        return $this->hasMany(Certification::class);
    }
}
