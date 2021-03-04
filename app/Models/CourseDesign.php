<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseDesign extends Model
{
    use HasFactory;

    public function course_infos() {
        return $this->hasMany(CourseInfos::class);
    }

    public function designs() {
        return $this->hasMany(Designs::class);
    }
}
