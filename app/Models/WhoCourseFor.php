<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WhoCourseFor extends Model
{
    use HasFactory;

    public function course_infos() {
        return $this->hasMany(CourseInfos::class);
    }
}
