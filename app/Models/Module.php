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

    public function course_module() {
        return $this->hasMany(CourseModule::class);
    }

    public function unit() {
        return $this->hasMany(Unit::class);
    }
}
