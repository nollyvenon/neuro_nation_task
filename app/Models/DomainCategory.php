<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DomainCategory extends Model
{
    protected $primaryKey = 'category_id';

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class, 'exercise_domain_category', 'category_id', 'exercise_id');
    }
}
