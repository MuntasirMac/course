<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseInfo extends Model
{
    use HasFactory;

    public function provider() {
        return $this->belongsTo(Provider::class);
    }

    public function why_choose() {
        return $this->belongsTo(WhyChoose::class);
    }

    public function certification() {
        return $this->belongsTo(Certification::class);
    }

    public function course_category() {
        return $this->hasMany(CourseCategory::class);
    }

    public function course_level() {
        return $this->hasMany(CourseLevel::class);
    }

    public function course_module() {
        return $this->hasMany(CourseModule::class);
    }

    public function course_design() {
        return $this->hasMany(CourseDesign::class);
    }

    public function order() {
        return $this->hasMany(Order::class);
    }

    public function reed_course_info() {
        return $this->hasMany(ReedCourseInfo::class);
    }

    public function daily_sale() {
        return $this->hasMany(DailySale::class);
    }

    public function web_course_info() {
        return $this->hasMany(WebCourseInfo::class);
    }
}
