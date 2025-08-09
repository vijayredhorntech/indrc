<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentAchievements extends Model
{
    protected $table = 'student_achievements';
    protected $fillable = ['title', 'description', 'image', 'publication_date', 'end_date'];

    protected function casts()
    {
        return [
            'publication_date' => 'date',
            'end_date' => 'date',
        ];
    }
}
