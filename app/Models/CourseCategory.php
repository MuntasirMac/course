<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    use HasFactory;

    public function course_info() {
        return $this->belongsto(CourseInfo::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
