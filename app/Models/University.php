<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $fillable = [
        'university_no',
        'university_address1',
        'university_address2',
        'university_email',
        'university_imageUrl',
        'student_id',
    ];

    public function student()
    {
        return $this->hasOne(Student::class);
    }

}
