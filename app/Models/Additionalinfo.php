<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Additionalinfo extends Model
{
    use HasFactory;

    protected $table = 'additional_info';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_id',
        'user_type',
        'doc_type',
        'document_name',
        'document_path',
    ];

   
    
}
