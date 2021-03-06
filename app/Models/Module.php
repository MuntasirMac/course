<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    public function quizzes() {
        return $this->belongsTo(Quizzes::class);
    }

    public function course_modules() {
        return $this->hasMany(CourseModule::class);
    }

    public function unit() {
        return $this->hasMany(Unit::class);
    }

    public function course_info() {
        return $this->belongsTo(CourseInfo::class);
    }
}
