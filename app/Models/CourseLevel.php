<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseLevel extends Model
{
    use HasFactory;

    public function course_info() {
        return $this->belongsTo(CourseInfo::class);
    }

    public function level() {
        return $this->belongsTo(Level::class);
    }
}
