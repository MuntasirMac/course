<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;
    public function certificate_type() {
        return $this->belongsTo(certificateType::class);
    }

    public function course_info() {
        return $this->hasMany(CourseInfo::class);
    }

}
