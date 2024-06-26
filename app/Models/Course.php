<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function students() {
        return $this->belongsToMany(Student::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class);
    }
}
