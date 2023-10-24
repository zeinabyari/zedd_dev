<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function getSlugAttribute()
    {
        return str_replace(' ', '_', $this->title);
    }


    public function getLessonCountAttribute()
    {
        return CourseToLesson::query()->where('course_id', '=', $this->id)->count();
    }


    public function teacher()
    {
        return $this->hasOne(Teacher::class, 'id', 'teacher_id');
    }

    public function lesson()
    {
        return $this->belongsToMany(Lesson::class, CourseToLesson::class);
    }
}
