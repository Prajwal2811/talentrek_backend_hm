<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationDetails extends Model
{
    use HasFactory;

    protected $table = 'education_details';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_id',
        'user_type',
        'high_education',
        'field_of_study',
        'institution',
        'graduate_year',
       
    ];

    public function educationDetails()
    {
        return $this->hasMany(EducationDetails::class, 'user_id');
    }

    
}
