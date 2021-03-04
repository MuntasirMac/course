<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebDailysale extends Model
{
    use HasFactory;

    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function marketplace_course_infos() {
        return $this->hasMany(MarketplaceCourseInfo::class);
    }
}
