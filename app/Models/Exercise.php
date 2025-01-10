<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $primaryKey = 'exercise_id';

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function categories()
    {
        return $this->belongsToMany(DomainCategory::class, 'exercise_domain_category', 'exercise_id', 'category_id');
    }
}
