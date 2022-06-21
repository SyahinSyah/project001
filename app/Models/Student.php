<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name',
        'student_age',
        'student_semester',
        'student_card',
        'student_status',
        'student_email',
        'email_university',
        'student_imageUrl'
    ];

    public function university()
    {
        return $this->hasOne(University::class);
    }

}
