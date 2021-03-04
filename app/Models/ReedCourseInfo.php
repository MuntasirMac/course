<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReedCourseInfo extends Model
{
    use HasFactory;

    public function course_info() {
        return $this->belongsTo(CourseInfo::class);
    }

    public function awarding_body() {
        return $this->belongsTo(AwardingBody::class);
    }

    public function reed_daily_sale() {
        return $this->hasMany(ReedDailySale::class);
    }
}
