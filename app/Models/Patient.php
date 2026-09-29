<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patient';

    protected $fillable = [
        'student_id',
        'name',
        'course',
        'year_level',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'patient_id');
    }
}
