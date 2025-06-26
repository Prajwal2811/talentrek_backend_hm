<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{
    use HasFactory;

    protected $table = 'skills';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'jobseeker_id',
        'skills',
        'interest',
        'job_category',
        'website_link',
        'portfolio_link',
       
    ];

   
    
}
