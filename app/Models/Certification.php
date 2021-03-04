<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    use HasFactory;
    public function certificate_types() {
        return $this->hasMany(certificateType::class);
    }

    public function course_info() {
        return $this->belongsTo(CourseInfo::class);
    }

}
