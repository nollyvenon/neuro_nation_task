<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseDomainCategory extends Model
{
    //protected $primaryKey = 'id';

    public function exercise_domains()
    {
        return $this->belongsToMany(DomainCategory::class, 'domain_category', 'category_id', 'exercise_id');
    }
}
