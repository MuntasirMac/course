<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDesign extends Model
{
    use HasFactory;

    public function course_info() {
        return $this->belongsTo(CourseInfo::class);
    }

    public function design() {
        return $this->belongsTo(Design::class);
    }
}
