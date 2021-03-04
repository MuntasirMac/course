<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterInfo extends Model
{
    use HasFactory;
    public function log() {
        return $this->hasMany(Log::class);
    }

    public function quizzes() {
        return $this->hasMany(Quzzes::class);
    }

    public function Instructor_info() {
        return $this->hasMany(InstructorInfo::class);
    }

    public function course_module() {
        return $this->hasMany(CourseModule::class);
    }
}
