<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebCourseInfo extends Model
{
    use HasFactory;

    public function course_info() {
        return $this->belongsTo(CourseInfo::class);
    }

    public function marketplace_daily_sales() {
        return $this->hasMany(MarketplaceDailySale::class);
    }
}
