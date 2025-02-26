<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table = 'jobs';
    protected $fillable = [
        'position',
        'location',
        'description',
        'experience',
        'requirement',
        'hour',
        'salary',
        'email',
        'date',
    ];
}
