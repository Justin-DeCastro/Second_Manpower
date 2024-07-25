<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManpowerReq extends Model
{
    use HasFactory;

    protected $fillable = [
        'work_type',
        'vacant_position',
        'job_category',
        'no_of_vacancy',
        'years_experience',
        'working_location',
        'working_schedule_hours',
        'working_schedule_days',
        'payout_firstdate',
        'payout_seconddate',
        'preferred_gender',
        'job_requirements',
        'other_requirements',
        'salary_from',
        'salary_to',
        'target_date',
        'screening_method',
        'job_description',
        'qualifications', // Ensure this field is fillable

    ];
}
