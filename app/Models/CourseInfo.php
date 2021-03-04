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

    public function course_categories() {
        return $this->hasMany(CourseCategories::class);
    }

    public function course_level() {
        return $this->belongsTo(CourseLevel::class);
    }

    public function course_modules() {
        return $this->hasMany(CourseModules::class);
    }

    public function course_design() {
        return $this->belongsTo(CourseDesign::class);
    }

    public function orders() {
        return $this->hasMany(Orders::class);
    }

    public function reed_course_info() {
        return $this->belongsTo(ReedCourseInfo::class);
    }

    public function daily_sales() {
        return $this->hasMany(DailySales::class);
    }

    public function listing_course_infos() {
        return $this->hasMany(ListingCourseInfos::class);
    }

    public function modules() {
        return $this->hasMany(Modules::class);
    }

    public function reviews() {
        return $this->hasMany(Reviews::class);
    }
}
