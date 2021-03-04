<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModule extends Model
{
    use HasFactory;

    public function register_info() {
        return $this->belongsTo(RegisterInfo::class);
    }

    public function module() {
        return $this->belongsTo(Module::class);
    }

    public function course_info() {
        return $this->belongsTo(CourseInfo::class);
    }
}
