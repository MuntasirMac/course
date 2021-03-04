<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AwardingBody extends Model
{
    use HasFactory;

    public function reed_course_infos() {
        return $this->hasMany(ReedCourseInfo::class);
    }
}
